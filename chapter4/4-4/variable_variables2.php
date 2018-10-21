<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>可変変数</title>
</head>
<body>
  <?php
  $unitPrice = 230;
  $quantity = 5;
  $tanka = "unitPrice";
  $kosu = "quantity";
  $ryoukin = $$tanka * $$kosu;
  echo $ryoukin
  ?>
</body>
</html>
