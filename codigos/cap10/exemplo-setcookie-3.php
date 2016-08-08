<?php 
  $valor = "valores a serem gravados";
  $tempo = time() + (3600*24*7);
  setcookie("Teste_Cookie", $valor, $tempo);
 ?>