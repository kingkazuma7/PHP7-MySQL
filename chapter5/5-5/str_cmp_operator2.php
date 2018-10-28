<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>比較演算子で文字列の大小を比較する</title>
</head>
<body>
<?php
function compare($a, $b){
  if($a < $b) {
    echo "{$a}、{$b}の順。\n<br>";
  } else if ($a == $b){
    echo "{$a}と{$b}は同じ。\n<br>";
  } else if ($a > $b){
    echo "{$b}、{$a}の順。\n<br>";
  }
}
compare("120", 99);
compare("A5", 0);
$num = 99;
compare("A5", (string)$num);
?>
</body>
</html>
