<?php 
  session_start();
  if (isset($_SESSION['minha_sessao'])) {
    echo "Sessao Ativa";
  } else {
    echo "Sessao nao existe!";
  }
 ?>