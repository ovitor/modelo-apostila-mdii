<!DOCTYPE html>
<html>
<head>
  <title>Capítulo 4 - Desafio Rápido 1</title>
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
    $a = 42; $b = 30; $c = 12.0;
  ?>

  <div class="container">
    <h1>Informações</h1>
    <ul>
      <li>Valor $a: <?php echo $a . " (" . gettype($a) . ")"; ?></li>
      <li>Valor $b: <?php echo $b . " (" . gettype($b) . ")"; ?></li>
      <li>Valor $c: <?php echo $c . " (" . gettype($c) . ")"; ?></li>
    </ul>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Teste</th>
            <th>Nome do teste</th>
            <th>Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo "(" . $a . " - " . $b . ") == " . $c; ?></td>
            <td><?php echo "Igualdade"; ?></td>
            <td><?php echo ($a - $b) == $c ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo "(" . $a . " - " . $b . ") === " . $c; ?></td>
            <td><?php echo "Idêntico"; ?></td>
            <td><?php echo ($a - $b) === $c ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo $b . " != " . $c; ?></td>
            <td><?php echo "Diferente"; ?></td>
            <td><?php echo $b != $c ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo $a . " < " . $b; ?></td>
            <td><?php echo "Menor que"; ?></td>
            <td><?php echo $a < $b ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo "(" . $b . " + " . $c . ") > " . $a; ?></td>
            <td><?php echo "Maior que"; ?></td>
            <td><?php echo ($b + $c) > $a ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo $c . " <= " . $a; ?></td>
            <td><?php echo "Menor ou igual que"; ?></td>
            <td><?php echo $c <= $a ? "verdadeiro" : "falso"; ?></td>
          </tr>
          <tr>
            <td><?php echo $b . " >= " . $c; ?></td>
            <td><?php echo "Maior ou igual que"; ?></td>
            <td><?php echo $b >= $c ? "verdadeiro" : "falso"; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> 



  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>