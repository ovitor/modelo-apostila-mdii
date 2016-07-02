<?php 
  // Operadores de incremento e decremento 
  $preco = 12.40;   
  ++$preco; 
  echo $preco; // resultado: 13.40

  $preco = 10.20;
  $preco_sem_mudanca = $preco++;
  echo "preco sem mudanca: " . $preco_sem_mudanca; // resultado: 10.20
  echo "<br />";
  echo "preco: " . $preco; // resultado: 11.20
?>