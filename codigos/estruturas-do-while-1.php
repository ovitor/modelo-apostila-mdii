<?php 
  // Sintaxe do comando do...while
  do {
    # codigo...
  } while (condicao);
?>

<?php 
  // Exemplo 
  $num = 0;
  do {
    echo $num . ", ";
    $num = $num + 1;
  } while ($num < 10);
  // resultado: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
?>