<?php 
  // variaveis estaticas 
  function teste() {
    static $a;
    $a = $a + 10;
    echo $a . "<br />";
  }
  teste(); // imprime 10 na tela
  teste(); // imprime 20 na tela
  teste(); // imprime 30 na tela
?>