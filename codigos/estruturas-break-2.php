<?php 
  // Exemplo
  for ($k = 0; $k < 10; $k++) { 
    if ($k == 5) {
      continue;
    }
    echo $k . ", ";
  } // resultado: 0, 1, 2, 3, 4, 6, 7, 8, 9, 
?>