<?php 
  // Operadores logicos
  // Lembre que 1 significa VERDADEIRO 
  // Lembre que 0 significa FALSO
  $esta_chovendo = false;
  echo "esta chovendo? " . (int)!$esta_chovendo; // resultado: 1
  echo "<br />";

  $noivo_presente = true;
  $noiva_presente = true;

  echo "vai ter casamento? " . (int)($noivo_presente and $noiva_presente);
  echo "<br />";

  $tem_identidade = false;
  $tem_tituloeleitor = true;

  echo "vai fazer prova? " . (int)($tem_identidade or $tem_tituloeleitor);
  echo "<br />";
?>