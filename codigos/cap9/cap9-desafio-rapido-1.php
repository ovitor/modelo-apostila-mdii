<!DOCTYPE html>
<html>
<head>
  <title>Capítulo 9 - Desafio Rápido 1</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
  <?php 
    $linhas = file("/var/www/aula08/informacoes.csv");
    $dados = array();
   ?>

  <div class="container">
    <h1>Informações dos Alunos</h1>
    <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($linhas as $linha) {
        $dados = str_getcsv($linha);
        if ($dados[0] == "id") {
          continue;
        }
        echo "<tr>";
          echo "<td>" . $dados[0] . "</td>" ;
          echo "<td>" . $dados[1] . "</td>" ;
          echo "<td>" . $dados[2] . "</td>" ;
          echo "<td>" . $dados[3] . "</td>" ;
        echo "</tr>";
      } ?>
    </tbody>
    </table>

  </div> 



  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>