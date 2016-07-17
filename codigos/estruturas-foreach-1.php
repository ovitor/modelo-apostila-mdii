<?php 
  // Sintaxe do comando foreach 
  foreach ($variavel_tipo_array as $elemento) {
    # codigo...
  }
  // Exemplo
  $alunos = array("Joaquim", "Maria", "Alice");
  foreach ($alunos as $nome) {
    echo $nome . ", ";
  } // resultado: Joaquim, Maria, Alice,
?>