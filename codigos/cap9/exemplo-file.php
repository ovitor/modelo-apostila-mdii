<?php 

  $linhas = file("/var/www/aula08/disciplinas.txt");
  foreach ($linhas as $linha) {
    echo $linha . "<br />";
  }
?>