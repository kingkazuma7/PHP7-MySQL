<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>変数の値渡し</title>
</head>
<body>
  <?php
  function oneUp($var){
    $var += 1;
  }
  $num = 5;
  oneUp($num);
  echo $num;
  ?>
</body>
</html>
