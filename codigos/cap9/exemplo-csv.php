<?php 
  $linhas = file("/var/www/aula08/informacoes.csv");
  $dados = array();

  foreach ($linhas as $linha) {
    $dados = str_getcsv($linha);
    print_r($dados);
    echo "<br />";
  }
?>