<?php 
  $informacoes = array("nome" => "Joaquim Silva", "cidade" => "Fortaleza")
  echo $informacoes["nome"] . "<br />";
  echo $informacoes["cidade"] . "<br />";
  // modificando valores do array
  $informacoes["nome"] = "Maria Lima";
  $informacoes["cidade"] = "Caucaia";
  // apresentando as novas informacoes
  echo $informacoes["nome"] . "<br />";
  echo $informacoes["cidade"] . "<br />";
?>