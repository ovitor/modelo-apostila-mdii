<?php 
	class Carro
	{
		public $cor;
		public $marca;
		public $ligado = "não";			// atributo com valor padrão = "não"

		public function ligar()
		{
			$this->ligado = "sim";		// muda o valor do atributo para "sim"
		}
		public function desligar()
		{
			$this->ligado = "não";		// muda o valor do atributo para "não"
		}
	}
?>