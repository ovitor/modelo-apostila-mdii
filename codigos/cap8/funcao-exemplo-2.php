<?php 
  // criacao da funcao
  function imprime_h1($texto) {
    $novo_texto = "<h1>". $texto ."</h1>";
    echo $novo_texto;
  }
?>
<?php 
  // usando a funcao criada anteriormente
  imprime_h1("Seja bem vindo!");
?>