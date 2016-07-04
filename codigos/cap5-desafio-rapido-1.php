<!DOCTYPE html>
<html>
<head>
  <title>Capítulo 5 - Desafio Rápido 1</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
  <?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  ?>
  <?php 
    $nome = "Joaquim Pereira";
    $idade = 42;
    $categoria = "";
  ?>

  <div class="container">
    <h1>Categorias disponíveis</h1>
    <table class="table">
    <thead>
      <tr>
        <th>Categoria</th>
        <th>Idade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Infantil A</td>
        <td>5 - 7 anos</td>
      </tr>
      <tr>
        <td>Infantil B</td>
        <td>8 - 10 anos</td>
      </tr>
      <tr>
        <td>Juvenil A</td>
        <td>11 - 13 anos</td>
      </tr>
      <tr>
        <td>Juvenil B</td>
        <td>14 - 17 anos</td>
      </tr>      
      <tr>
        <td>Adulto</td>
        <td>18 - 44 anos</td>
      </tr>      
      <tr>
        <td>Adulto</td>
        <td>acima de 45 anos</td>
      </tr>      
    </tbody>
    </table>

    <?php 
      if ($idade >= 5 and $idade <= 7) {
        $categoria = "Infantil A";
      } elseif ($idade >= 8 and $idade <= 10) {
        $categoria = "Infantil B";
      } elseif ($idade >= 11 and $idade <= 13) {
        $categoria = "Juvenil A";
      } elseif ($idade >= 14 and $idade <= 17) {
        $categoria = "Juvenil B";
      } elseif ($idade >= 18 and $idade <= 44) {
        $categoria = "Juvenil B";
      } elseif ($idade >= 18 and $idade <= 44) {
        $categoria = "Adulto";
      } elseif ($idade >= 45) {
        $categoria = "Sênior";
      } else {
        $categoria = "Não pode concorrer!";
      }
    ?>

    <?php echo $nome; ?> 
    <?php echo "<br />"; ?>
    <b><?php echo $categoria; ?></b>

  </div> 



  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>