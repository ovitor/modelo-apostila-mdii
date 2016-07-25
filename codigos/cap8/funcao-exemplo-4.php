<?php 
  // variaveis locais 
  function teste() {
    global $a;
    $a = "variavel global";
  }
  teste();
  echo $a; // resultado: sera impresso: variavel global
?>