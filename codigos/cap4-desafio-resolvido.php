<?php 
  $saudacao = "Bom dia!";
  $aluno = "Joaquim Silva";
  $nascimento = "29/06/1992";

  echo "-------" . "<br />";
  echo $saudacao . "<br />";
  echo "-------" . "<br />";

  $nota1 = 6.1;
  $nota2 = 4.0;
  $nota3 = 9;

  $media = ($nota1 + $nota2 + $nota3) / 3;
  $situacao = $media > 6 ? "APROVADO" : "RECUPERACAO"; 

  $info = "Aluno: " . $aluno . "<br />";
  echo $info;
  echo "Situacao: " . $situacao;
?>