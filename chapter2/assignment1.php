<?php

  $a = 100;
  $b = $a + 1;
  var_dump($a);
  var_dump($b);
  echo "<br>";

  $a = $b = $c = 100;
  var_dump($a);
  var_dump($b);
  var_dump($c);
  echo "<br>";

  $a = 0;
  $a += 10;
  echo $a;
  echo "<br>";

  $total = 80+40;
  $result = $total - 5;
  echo "合計{$total},最終結果{$result}";
  echo "<br>";

  $kingaku = 5470;
  $amari = $kingaku % 4;
  $hitori = ($kingaku - $amari) / 4;
  echo "1人{$hitori}円、不足{$amari}円";

?>
