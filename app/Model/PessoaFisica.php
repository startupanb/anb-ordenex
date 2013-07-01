<?php  
	/**
	* 
	*/
	class PessoaFisica extends AppModel{
		public $useTable = 'pessoa_fisica';
		public $displayField = 'nome';
		
		public $belongsTo = array(
			"User" 
		);

		public $validate = array(
			'nome' => array(
				'rule' => 'notEmpty',
				'message' => 'O nome deve ser preenchido'
			),
			'cpf' => array(
				'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'O CPF deve ser preenchido!',
					'last' => true
				),
				// 'mustMatch' => array(
				// 	'rule' => array('cpf'),
				// 	'message' => 'CPF inválido',
				// 	'last' => true),
				'mustUnique' => array(
					'rule' => 'isUnique',
					'on' => 'create',
					'message' => 'CPF já cadastrado!',
				)
			),
			'data_nascimento' => array(
				'mustBeDate' => array(
		            'rule' => 'date',
		            'message' => 'Insira uma data válida'		         
		        ),
		        'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'A data de nascimento deve ser preenchida!',
					'last' => true
				)
	        ),
			'sexo_m_f' => array(
				'mustBeNumeric' => array(
		            'rule' => 'numeric',
		            'message' => 'Selecione o seu sexo',
		            'allowEmpty' => true
		        ),
		        'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'O campo sexo deve ser preenchida!',
					'last' => true
				)
	        ),
	        'usuarios_id' => array(
	        	'rule' => 'notEmpty',
	        	'message' => 'Problemas ao se cadastrar, contate o administrador do sistema'
	        )
		);

		public function cpf(){

		}
	}
?>