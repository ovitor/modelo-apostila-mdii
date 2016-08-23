<?php 
  class Carro {
    public $cor;
    public $marca;
    public $ligado = "nao"; // atributo com valor padrao = "nao"

    public function ligar() {
      $this->ligado = "sim";  // muda o valor do atributo para "sim"
    }
    public function desligar() {
      $this->ligado = "nao";  // muda o valor do atributo para "nao"
    }
  }
?>