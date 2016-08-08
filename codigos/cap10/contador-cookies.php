<?php 

	$valor = 1;
	$tempo = time() + (3600*24*7);  // tempo de vida
	$valor = $_COOKIE['contador']+1; // inicia a contagem
	setcookie("contador", $valor, $tempo);	// grava o valor
	echo $_COOKIE['contador']." visitas no site!";	// imprime

 ?>