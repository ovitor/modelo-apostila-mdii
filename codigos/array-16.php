<?php 
  // Exemplo
  $matriz = array(
    array("00", "01", "02"), // primeira linha
    array("10", "11", "12"), // segunda linha
    array("20", "21", "22")  // segunda linha
  );
  for ($linha = 0; $linha < 3; $linha++) { 
    for ($coluna = 0; $coluna < 3; $coluna++) { 
      echo $matriz[$linha][$coluna] . ", ";
    }
    echo "<br />";
  }
?>