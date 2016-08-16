<?php 
	class Carro
	{
		public $cor;
		public $marca;
		public $ligado = false;					// atributo com valor padrão = false

		public function ligar()
		{
			if ($this->ligado) {				// verifica se o atributo é verdadeiro (carro ligado)
				echo "O carro já ligado";		// se o atributo for verdadeiro, exibe a mensagem	
			} 
			else {
				$this->ligado = true;			// caso contrário, muda o atributo para true (liga o carro)
			}
		}
		public function desligar()
		{
			// tente fazer este método desligar com a mesma lógica
		}
	}
?>