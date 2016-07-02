<?php 
  // Outras maneiras de declarar um valor booleano falso 
  $id = "ab13c";   
  $nome = "Joaquim ";   
  $sobrenome = "Silva ";   

  $nome_sobrenome = $nome . $sobrenome;
  echo $nome_sobrenome; // resultado: Joaquim Silva
  echo "<br/>";

  $informacao = $nome_sobrenome .= $id;
  echo $informacao; // resultado: Joaquim Silva ab13c
?>