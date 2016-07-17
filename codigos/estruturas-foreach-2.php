<?php 
  // Sintaxe completa do comando foreach 
  foreach ($variavel_tipo_array as $chave => $valor) {
    # codigo...
  }
  // Exemplo
  $alunos = array(0 => "Joaquim", 1 => "Maria", 2 => "Alice");
  foreach ($alunos as $indice => $nome) {
    echo $indice . " - " . $nome . "<br />";
  } // resultado
  // 0 - Joaquim
  // 1 - Maria
  // 2 - Alice
?>