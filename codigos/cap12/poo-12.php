<?php 
  ...
  $meucarro = new Carro();
  $meucarro->cor = "verde";
  $meucarro->marca = "Fiat";
  echo $meucarro->ligado;  // exibe "nao", valor padrao da classe
  $meucarro->ligar();  // executamos o metodo ligar()
  echo $meucarro->ligado;  // agora exibe "sim", valor alterado pelo metodo ligar()
  $meucarro->desligar();  // executamos o metodo desligar()
  echo $meucarro->ligado;  // agora exibe "nao", valor alterado pelo metodo desligar()
?>