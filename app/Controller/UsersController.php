<?php
class UsersController extends AppController {
	
	public $paginate = array(
		'limit' => 20,
		'paramType' => 'querystring',
		'order' => array(
			'User.created' => 'DESC'
		)
	);
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('create', 'contato', 'cadastro_vendedor', 'cadastro_comprador');
	}
	
	public function admin_login() {
		if ($this->Auth->user()) {
			return $this->redirect($this->Auth->redirect());
		}
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->setFlashMessage('Login inválido', 'error');
			}
		}
	}
	
	public function admin_search() {
		$this->autoRender = false;
		$conditions = null;
		if (isset($this->request->query['search']) && !empty($this->request->query['search'])) {
			$conditions[] = array(
				'OR' => array(
					'User.name LIKE' => '%' . $this->request->query['search'] . '%',
					'User.email LIKE' => '%' . $this->request->query['search'] . '%'
				)
			);
			$this->paginate['conditions'] = $conditions;
			$this->set('users', $this->paginate('User'));
			$this->render('admin_index');
		}
	}
	
	public function admin_logout() {
		$this->redirect($this->Auth->logout());
	}
	
	public function admin_index() {
		$this->set('users', $this->paginate('User'));
	}
	
	public function admin_edit($id=null) {
		$this->User->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->User->read();
			unset($this->request->data['User']['password']);
		} else {
			if (empty($this->request->data['User']['password'])) {
				unset($this->request->data['User']['password']);
				unset($this->request->data['User']['cpassword']);
			}
			if ($this->User->save($this->request->data)) {
				$this->setFlashMessage('Usuário alterado com sucesso!', 'success', array('action' => 'index'));
			} else {
				$this->setFlashMessage('Não foi possível alterar, tente novamente!', 'error');
			}
		}
	}
	
	public function admin_add() {
		if ($this->request->is('post') && !empty($this->request->data)) {
			if ($this->User->save($this->request->data)) {
				$this->setFlashMessage('Usuário criado com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}
	
	public function admin_del($id=null) {
		if ($this->request->is('get') || $this->request->is('delete')) {
			if ($this->User->delete($id)) {
				$this->setFlashMessage('Usuário excluído com sucesso!', 'success', array('action' => 'index'));
			}
		}
	}
	
	/* cria o primeiro usuário/operador */
	public function create() {
		$this->autoRender = false;
		if ($this->User->save(array('name' => 'Mkt Virtual', 'email' => 'mktvirtual@mktvirtual.com.br', 'password' => '123456', 'cpassword' => '123456'))) {
			$this->setFlashMessage('Usuário adicionado com sucesso!', 'success', array('admin' => true, 'controller' => 'users', 'action' => 'login'));
		}
	}
	
	public function contato() {
		if (!empty($this->request->data)) {
			$this->User->contato($this->request->data);
		}
	}

	#Action que cadastra vendedores dos dois tipos pessoa fisica e juridica
	public function cadastro_vendedor(){
		
		if (!empty($this->request->data)) {
			// debug($this->data);
			#validação de usuário comum
			$this->User->set($this->data);
			if($this->User->validates()){
				$this->loadModel('Vendedor');

				$this->Vendedor->set($this->data);
				if($this->Vendedor->validates()){
					if($this->data['User']['pessoa_fisica_juridica'] == 0){
						
						// debug($this->data);			
						#validação de pessoa fisica
						$this->LoadModel('PessoaFisica');
						$this->PessoaFisica->set($this->data);
						if($this->PessoaFisica->validates()){
							// $this->User->hasOne = "PessoaFisica";
							// $this->PessoaFisica->hasOne = "User";
								$this->request->data['User']['vendedor'] = 1;
								if($this->User->save($this->data)){

									#atribui o id do usuário cadastrado para fazer o relacionamento na tabela pessoa_fisica
									$this->request->data['PessoaFisica']['usuarios_id'] = $this->User->id;
									$this->request->data['Vendedor']['usuarios_id'] = $user['User']['id'];

									if($this->PessoaFisica->save($this->data)){
										if($this->Vendedor->save($this->data)){
											// echo "Salvou!";		
											
										}else{
											debug($this->Vendedor->validationErrors);
										}																
									}else{
										debug($this->User->PessoaFisica->validationErrors);
									}
									
								}else{
									// echo "Não Salvou!";
								}
						}else{
							#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
							// debug($this->PessoaFisica->validationErrors);
						}	
					}else{
		
						#validação pessoa juridica
						$this->LoadModel('PessoaJuridica');

						$this->PessoaJuridica->validate = array(
							'nome_fantasia' => array(
								'rule' => 'notEmpty',
								'message' => 'O nome fantasia deve ser preenchido'
							),
							'razao_social' => array(
								'rule' => 'notEmpty',
								'message' => 'A razão social deve ser preenchida'
							),
							'cnpj' => array(
								'mustNotEmpty' => array(
									'rule' => 'notEmpty',
									'message' => 'O CNPJ deve ser preenchido!',
									'last' => true
								),
								// 'mustMatch' => array(
								// 	'rule' => array('cnpj'),
								// 	'message' => 'CNPJ inválido',
								// 	'last' => true),
								'mustUnique' => array(
									'rule' => 'isUnique',
									'on' => 'create',
									'message' => 'CNPJ já cadastrado!',
								)
							),
							'responsavel' => array(
								'rule' => 'notEmpty',
								'message' => 'O nome do responsavel deve ser preenchido'
							)
						);

						$this->PessoaJuridica->set($this->data);
						if($this->PessoaJuridica->validates()){
							if($this->User->save($this->data)){

								#atribui o id do usuário cadastrado para fazer o relacionamento na tabela pessoa_juridica
								$this->request->data['PessoaJuridica']['usuarios_id'] = $this->User->id;
								$this->request->data['Vendedor']['usuarios_id'] = $user['User']['id'];
								
								if($this->PessoaJuridica->save($this->data)){
									// echo "Salvou2!";	
									
								}else{
									debug($this->User->PessoaJuridica->validationErrors);
									return false;
								}
								
							}else{
								// echo "Não Salvou2!";
								return false;
							}
							
						}else{
							#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
							// debug($this->PessoaJuridica->validationErrors);
							
						}
					}

					#Verifica se o cadastro do vendedor foi executado corretamente
					if(isset($this->Vendedor->id) && !empty($this->Vendedor->id)){
						$this->loadModel('Referencia');
						$this->loadModel('VendedorReferencia');
						$referencia = array();
						
						for($i = 1; $i <= 2; $i++){
							$referencia['Referencia'] = $this->data['Referencia'][$i];
							debug($referencia);
							$this->Referencia->id = null;
							if(!$this->Referencia->save($referencia)){
								#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
								debug($this->Referencia->validationErrors);
								exit;
							}else{
								$vendRef = array();
								$vendRef['VendedorReferencia']['vendedores_id'] = $this->Vendedor->id;
								$vendRef['VendedorReferencia']['referencias_id'] = $this->Referencia->id;
								$this->VendedorReferencia->id = null;
								if(!$this->VendedorReferencia->save($vendRef)){
									// debug($vendRef);
									// debug($this->VendedorReferencia->validationErrors);
								}
							}
						}
						unset($this->request->data);
					}
					
				}else{
					#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
					// debug($this->Vendedor->validationErrors);

				}
			}else{
				#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
				// debug($this->User->validationErrors);
			}
		}

		$this->loadModel('Segmento');
		$buscaSeg = $this->Segmento->find('all', array('fields' => array('id', 'nome')));
		$segmentos = array();
		$segmentos[0] = 'Selecione';
		foreach ($buscaSeg as $key => $seg) {
			$segmentos[$seg['Segmento']['id']] = $seg['Segmento']['nome'];
		}
		
		$this->set('segmentos', $segmentos);
		$c = array('conditions' => array('User.id' => 2));
		//$this->User->contain('PessoaJuridica');
		$t = $this->User->findContains();
		// debug($t);
	}

	#Action que cadastra compradores
	public function cadastro_comprador(){
		if (!empty($this->request->data)) {
			debug($this->data);
			#validação de usuário comum
			$this->User->set($this->data);
			if($this->User->validates()){
			
				if($this->data['User']['pessoa_fisica_juridica'] == 0){
					
					// debug($this->data);			
					#validação de pessoa fisica
					$this->LoadModel('PessoaFisica');
					$this->PessoaFisica->set($this->data);
					if($this->PessoaFisica->validates()){
						// $this->User->hasOne = "PessoaFisica";
						// $this->PessoaFisica->hasOne = "User";
							$this->request->data['User']['comprador'] = 1;
							if($this->User->save($this->data)){

								
								#atribui o id do usuário cadastrado para fazer o relacionamento na tabela pessoa_fisica
								$this->request->data['PessoaFisica']['usuarios_id'] = $this->User->id;

								if($this->PessoaFisica->save($this->data)){
									echo "salvou";
								}else{
									debug($this->User->PessoaFisica->validationErrors);
								}
								
							}else{
								// echo "Não Salvou!";
							}
					}else{
						#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
						debug($this->PessoaFisica->validationErrors);
					}	
				}else{
	
					#validação pessoa juridica
					$this->LoadModel('PessoaJuridica');
					$this->PessoaJuridica->set($this->data);
					if($this->PessoaJuridica->validates()){
						if($this->User->save($this->data)){

							#atribui o id do usuário cadastrado para fazer o relacionamento na tabela pessoa_juridica
							$this->request->data['PessoaJuridica']['usuarios_id'] = $this->User->id;
							
							
							if($this->PessoaJuridica->save($this->data)){
								echo "Salvou2!";	
								
							}else{
								debug($this->User->PessoaJuridica->validationErrors);
								return false;
							}
							
						}else{
							// echo "Não Salvou2!";
							return false;
						}
						
					}else{
						#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
						debug($this->PessoaJuridica->validationErrors);
						
					}
				}
				
			}else{
				#printa os erros de validação na tela, SEMPRE DEIXAR COMENTADO QUANDO NÂO ESTIVER EM USO!!
				debug($this->User->validationErrors);
			}
		}
	}


	#Função que retorna o ultimo usuário cadastrado na base de dados
	public function _ultimo_cadastro_usuario(){
		return $this->User->find('first', array('order' => 'id DESC', 'fields' => array('id')));
	}

	public function _ultimo_cadastro_vendedor(){
		return $this->Vendedor->find('first', array('order' => 'id DESC', 'fields' => array('id')));
	}
}