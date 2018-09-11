<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  // フォーム入力の値を得る（単価と個数）
  $tanka = $_POST["tanka"];
  $kosu = $_POST["kosu"];
  // 計算する
  $price = $tanka * $kosu;
  // 表示する（3桁取り）
  $tanka = number_format($tanka);
  $kosu = number_format($kosu);
  echo "単価{$tanka}円 × ${kosu}個は${price}円です。"
  ?>
</body>
</html>
