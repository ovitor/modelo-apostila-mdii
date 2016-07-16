<?php 
  // Sintaxe estrutura condicional switch
  switch ($variavel) {
    case 'valor 1':
      # codigo caso $variavel seja igual a 'valor 1'
    case 'valor 2':
      # codigo caso $variavel seja igual a 'valor 2'
  }

  // Exemplo real
  $numero = 3;
  switch ($numero) {
    case 1:
      echo "opcao 1" . "<br />";
    case 2:
      echo "opcao 2" . "<br />";
    case 3:
      echo "opcao 3" . "<br />";
    case 4:
      echo "opcao 4" . "<br />";
  }
?>