<?php 
  class Formula1 extends Carro {
    public $piloto;
    public $equipe;
    public $velocidade = 0;

    public function acelerar() {
       $this->velocidade = $this->velocidade + 100;
    }
}

  $ferrari = new Formula1();
  $ferrari->piloto = "Schumacher";
  $ferrari->equipe = "Ferrari";
  $ferrari->cor = "vermelho";
  $ferrari->ligar(); // exibe o resultado "Carro ligado"
  $ferrari->acelerar();// executa acelerar, aumentando em 100 a velocidade
  echo $ferrari->velocidade;// exibe "100";
?>