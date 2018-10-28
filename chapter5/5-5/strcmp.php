<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>strcmp()を使って比較する</title>
</head>
<body>
  <pre>
  <?php
  function comparStr($a, $b){
    $result = strcmp($a, $b);
    if($result < 0) {
      echo "{$a}、{$b}の順。\n";
    } else if ($result == 0) {
      echo "{$a}、{$b}は同じ。\n";
    } else if ($result > 0) {
      echo "{$b}、{$a}の順。\n";
    }
  }
  comparStr("123", 99);
  comparStr("A123", 99);
  comparStr("009", 99);
  ?>
  </pre>
</body>
</html>
