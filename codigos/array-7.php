<?php 
  $informacoes["nome"] = "Joaquim Silva";
  $informacoes["endereco"] = "rua A, n. 10";
  $informacoes["bairro"] = "Benfica";
  $informacoes["cidade"] = "Fortaleza");
  // Acessando valores
  foreach ($informacoes as $chave => $valor) {
    echo $chave . ": " . $valor . "<br />";
  } // resultado:
  // nome: Joaquim Silva
  // endereco: rua A, n. 10 
  // bairro: Benfica 
  // cidade: Fortaleza 
?>