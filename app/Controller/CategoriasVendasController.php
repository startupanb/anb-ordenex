<?php  
	/**
	* 
	*/
	class CategoriasVendasController extends AppController{

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('sincroniza_categorias_akatus');
		}
		public function sincroniza_categorias_akatus(){
			$this->autoRender = false;
			
			$xml = Xml::build('https://www.akatus.com/api/v1/correntista/tipos-de-comercio.xml');
			$string = $xmlArray = Xml::toArray($xml);
			$countCVXml = count($string['resposta']['categorias']['categoria']);
			$countCV = $this->CategoriasVenda->find('count');
			if($countCV != $countCVXml){
				foreach ($string['resposta']['categorias']['categoria'] as $key => $categoria) {
					$this->CategoriasVenda->set($categoria);
					$this->CategoriasVenda->save();
				}
				echo 'entrou';
			}
			

		}
	}
?>