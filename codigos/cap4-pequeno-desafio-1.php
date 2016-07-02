<!DOCTYPE html>
<html>
<head>
  <title>Capítulo 4 - Pequeno Desafio 1</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
  <?php 
    $id = "ab13c";
    $nome = "Joaquim";
    $sobrenome = "Silva";
    $nascimento = "14/03/1992";
  ?>

  <div class="container">
    <h1>Informações</h1>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Nascimento</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $nome; ?></td>
            <td><?php echo $sobrenome; ?></td>
            <td><?php echo $nascimento; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 



  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>