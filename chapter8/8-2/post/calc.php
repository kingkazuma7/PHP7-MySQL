<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <?php
    $tanka = $_POST["tanka"];
    $kosu  = $_POST["kosu"]; 
    $price = $tanka * $kosu;
    $tanka = number_format($tanka);
    $price = number_format($price);
    echo "単価{$tanka}円 × {$kosu}個 は {$price}円です"
  ?>
</body>
</html>
