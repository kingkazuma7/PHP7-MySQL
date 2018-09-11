<?php
  $numArray = array();
  while (count($numArray) < 5) {
    $num = mt_rand(1, 30);
    if (! in_array($num, $numArray)) {
      array_push($numArray, $num);
    }
  }
  print_r($numArray);

  echo "<br>";

  do {
    $a = mt_rand(1, 13);
    $b = mt_rand(1, 13);
    $c = mt_rand(1, 13);
    $abc = $a + $b + $c;
    if ($abc == 21) {
      break;
    }
  } while (TRUE);
  echo "合計が21になる3個の数字。${a}、${b}、${c}";
?>

