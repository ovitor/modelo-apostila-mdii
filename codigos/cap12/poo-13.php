<?php 
	class Carro {
		public $cor;
		public $marca;
		public $ligado = false;					// atributo com valor padrao = false

		public function ligar() {
			if ($this->ligado) {				// verifica se o atributo e verdadeiro (carro ligado)
				echo "O carro ja esta ligado";		// se o atributo for verdadeiro, exibe a mensagem	
			} 
			else {
				$this->ligado = true;			// caso contrario, muda o atributo para true (liga o carro)
			}
		}
		public function desligar() {
			// tente fazer este metodo desligar com a mesma logica
		}
	}
?>