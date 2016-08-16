<?php 
	$meucarro = new Carro();
	$meucarro->cor = "verde";
	$meucarro->marca = "Fiat";
	echo $meucarro->ligado; 	// exibe "não", que é o valor padrão da classe
	$meucarro->ligar();			// executamos o método ligar()
	echo $meucarro->ligado; 	// agora exibe "sim", valor alterado pelo método ligar()
	$meucarro->desligar();		// executamos o método desligar()
	echo $meucarro->ligado; 	// agora exibe "não", valor alterado pelo método desligar()
?>