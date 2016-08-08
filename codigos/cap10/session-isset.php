<?php 

	session_start();

	if (isset($_SESSION['minha_sessao'])) {
		echo "Sessão Ativa";
	} else {
		echo "Sessão não existe!";
	}

 ?>