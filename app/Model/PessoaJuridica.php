<?php  
	/**
	* 
	*/
	class PessoaJuridica extends AppModel{
		public $useTable = 'pessoa_juridica';
		public $displayField = 'nome_fantasia';

		public $belongsTo = array(
			"User" 
		);

		// public $validate = array(
		// 	'nome_fantasia' => array(
		// 		'rule' => 'notEmpty',
		// 		'message' => 'O nome fantasia deve ser preenchido'
		// 	),
		// 	'razao_social' => array(
		// 		'rule' => 'notEmpty',
		// 		'message' => 'A razão social deve ser preenchida'
		// 	),
		// 	'cnpj' => array(
		// 		'mustNotEmpty' => array(
		// 			'rule' => 'notEmpty',
		// 			'message' => 'O CNPJ deve ser preenchido!',
		// 			'last' => true
		// 		),
		// 		// 'mustMatch' => array(
		// 		// 	'rule' => array('cnpj'),
		// 		// 	'message' => 'CNPJ inválido',
		// 		// 	'last' => true),
		// 		'mustUnique' => array(
		// 			'rule' => 'isUnique',
		// 			'on' => 'create',
		// 			'message' => 'CNPJ já cadastrado!',
		// 		)
		// 	),
		// 	'responsavel' => array(
		// 		'rule' => 'notEmpty',
		// 		'message' => 'O nome do responsavel deve ser preenchido'
		// 	)
		// );

		public function cnpj(){

		}
	}
?>