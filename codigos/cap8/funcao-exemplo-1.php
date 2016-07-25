<?php 
  // criacao da funcao
  function calcula_imc($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
  }
?>
<?php 
  // usando a funcao criada anteriormente
  $peso = 62;
  $altura = 1.75;
  $imc = calcula_imc($peso);
  echo "indice de massa corporal: " . $imc;
  // resultado de $imc = 20.244897959
?>