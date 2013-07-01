<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $useTable = 'usuarios';
	public $displayField = 'email';
	public $actsAs = array('Containable');
	// public $hasOne = array(
	// 	"PessoaFisica" => array(
	// 		"className" => "PessoaFisica",
	// 		"foreignKey" => "usuarios_id"
	// 		// "conditions" => array("User.id" => "PessoaFisica.usuarios_id")
	// 	),
	// 	"PessoaJuridica" => array(
	// 		"className" => "PessoaJuridica",
	// 		"foreignKey" => "usuarios_id"
	// 		// "conditions" => array("User.id" => "PessoaFisica.usuarios_id")
	// 	),
	// 	"Vendedor" => array(
	// 		"className" => "Vendedor",
	// 		"foreignKey" => "usuarios_id"
	// 		// "conditions" => array("User.id" => "PessoaFisica.usuarios_id")
	// 	)
	// );

	public $validate = array(
		
		'email' => array(
			'mustNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'O e-mail deve ser preenchido!',
				'last' => true
			),
			'mustBeEmail' => array(
				'rule' => array('email'),
				'message' => 'E-mail inválido',
				'last' => true),
			'mustUnique' => array(
				'rule' => 'isUnique',
				'on' => 'create',
				'message' => 'E-mail já cadastrado!',
			)
		),
		'password' => array(
			'mustNotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Senha é obrigatório!',
				'on' => 'create',
				'last' => true),
			'mustBeLonger' => array(
				'rule' => array('minLength', 6),
				'message' => 'Senha deve conter mais de 5 caracteres!',
				'last' => true
			),
			'mustMatch' => array(
				'rule' => array('verifies'),
				'message' => 'Senha inválida, confirme a sua senha novamente'
			)
		),
		'cep' => array(
			'rule' => 'notEmpty',
			'message' => 'O CEP deve ser preenchido'
		),
		'logradouro' => array(
			'rule' => 'notEmpty',
			'message' => 'O Logradouro deve ser preenchido'
		),
		'numero' => array(
			'rule' => 'notEmpty',
			'message' => 'O Numero deve ser preenchido'
		),
		'bairro' => array(
			'rule' => 'notEmpty',
			'message' => 'O Bairro deve ser preenchido'
		),
		'cidade' => array(
			'rule' => 'notEmpty',
			'message' => 'O Cidade deve ser preenchido'
		),
		'uf' => array(
			'rule' => 'notEmpty',
			'message' => 'Selecione o estado em que você reside'
		),
		'telefone_residencial' => array(
			'rule' => 'notEmpty',
			'message' => 'O numero de Telefone Residencial deve ser preenchido'
		),
		'telefone_celular' => array(
			'rule' => 'notEmpty',
			'message' => 'O numero de Telefone Celular deve ser preenchido'
		)

	);

	public function beforeFind($opt = array()){
		// $this->hasOne = array("PessoaJuridica" => array(
		// 	"className" => "PessoaJuridica",
		// 	"foreignKey" => "usuarios_id"
		// 	// "conditions" => array("User.id" => "PessoaFisica.usuarios_id")
		// ));
		// $opt['recursive'] = 1;
		// // $this->find('first');
		// debug($opt);
		
  //  		
		// $opt['fields'] = 'User.id';
		// return $opt;
	}

	
	public function beforeSave($opt=array()) {
		if (isset($this->data[$this->alias]['password']) && !empty($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}

	#metodo para buscar somente os campos 
	public function findContains($conditions = array()){
		$conditions['fields'] = array('id', 'pessoa_fisica_juridica', 'vendedor');
		$user = $this->find('all', $conditions);
		$return = array();
		foreach ($user as $key => $u) {
			if($u['User']['pessoa_fisica_juridica'] == 1){
				$this->hasOne = array("PessoaJuridica" => array(
					"className" => "PessoaJuridica",
					"foreignKey" => "usuarios_id"
				));
				$return[] = $this->find('first', array('conditions' => array('User.id' => $u['User']['id']), 'recursive' => 1));
				// debug($return);
			}else{
				$this->hasOne = array("PessoaFisica" => array(
					"className" => "PessoaFisica",
					"foreignKey" => "usuarios_id"
				));
				$return[] = $this->find('first', array('conditions' => array('User.id' => $u['User']['id']), 'recursive' => 1));
				// debug($return);
			}
		}
	}
	
	public function verifies() {
		if (!isset($this->data[$this->alias]['cpassword'])) {
			return false;
		}
		return ($this->data[$this->alias]['password'] === $this->data[$this->alias]['cpassword']);
	}
	
	/*
	public function contato($options=null) {
		$cakeEmail = new CakeEmail();
		$cakeEmail->template('contato', 'default')
			->config('smtp')
			->emailFormat('html')
			->to('email@email.com')
			->subject('Assunto')
			->from(array('email@email.com' => 'Site'))
			->sender(array('email@email.com' => 'Site'))
			#->viewVars(array('data' => $date))
			->send();
		return true;
	}
	*/
}