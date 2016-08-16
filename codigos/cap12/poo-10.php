<?php 
	class Carro
	{
		public $cor;
		public $marca;
		public $dono;
		public $placa;

		public function info()
		{
			echo $this->dono." tem um carro ".$this->cor." da ".$this->marca;
		}
	}

	$meucarro = new Carro();		//instanciando a classe Carro
	$meucarro->cor = "amarelo";		// setando os atributos
	$meucarro->marca = "Fiat";
	$meucarro->dono = "Joaquim";
	$meucarro->info();				// exibe "Joaquim tem um carro amarelo da Fiat"	
?>