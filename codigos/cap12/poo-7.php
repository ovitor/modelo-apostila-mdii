<?php 
  class Carro {
    public $cor = "branco";
    public $marca;
    public $airbag = true;
  }

  $fusca = new Carro();
  echo $fusca->cor; // exibe o resultado "branco"
?>