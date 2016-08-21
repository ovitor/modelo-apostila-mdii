<?php
  $arquivo = fopen("frase.txt","w");
  fwrite($arquivo, "oi, tudo bem!");
  fclose($arquivo);
?>