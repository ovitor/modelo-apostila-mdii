<?php 
  echo "<h1>Trabalhando com arquivos</h1>" . "<br />";
  $fid = fopen("/var/www/aula08/disciplinas.txt", "w");
  fwrite($fid, "programacao web\r\n");
?>