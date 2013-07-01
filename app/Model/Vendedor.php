<?php  
	/**
	* 
	*/
	class Vendedor extends AppModel{
		public $useTable = 'vendedores';

		public $belongsTo = array(
			"User" 
		);

		public $validate = array(
			'loja_fisica' => array(
				'mustBeNumeric' => array(
		            'rule' => 'numeric',
		            'message' => 'Escolha sim ou não se você possui loja fisica'
		        ),
		        'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'O campo possui loja fisica deve ser preenchido!',
					'last' => true
				)
	        ),
			'retirada_local' => array(
				'mustBeNumeric' => array(
		            'rule' => 'numeric',
		            'message' => 'Escolha sim ou não se você permite retirada no local'
		        ),
		        'mustNotEmpty' => array(
					'rule' => 'notEmpty',
					'message' => 'O campo permite retirada no local deve ser preenchido!',
					'last' => true
				)
	        )
		);

		public function cnpj(){

		}
	}
?>