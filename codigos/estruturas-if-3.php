<?php 
  // Sintaxe estrutura condicional if encadeado
  if (condicao) {
    # codigo...
  } elseif (condicao 2) {
    # codigo 2...
  } else {
    # outro codigo...
  }

  // Exemplo real
  $media = 2.5;
  if ($media >= 7) {
    echo "Aluno aprovado!";
  } elseif ($media < 3) {
    echo "Aluno reprovado!";
  } else {
    echo "Aluno em recuperacao!";
  }
?>