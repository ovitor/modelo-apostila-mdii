<?php
  $ex1 = 12.0 < 11.2;
  $ex2 = 10 * 2 - 3 > 19 % 3 + 10;
  $ex3 = 10;
  print( ($ex1 || $ex3 = 10 && $ex2) ? "verdadeiro" : "falso");
?>