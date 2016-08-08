<?php 

	$valor = "valores a serem gravados";
	$tempo = time() + (3600*24*7);  // tempo de vida
	setcookie("Teste_Cookie", $valor, $tempo);	// grava o valor
	echo $_COOKIE['Teste_Cookie'];	// imprime

 ?>