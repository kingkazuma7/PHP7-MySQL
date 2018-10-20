<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>グローバルスコープ</title>
</head>
<body>
  <?php
  $tax = 0.08;
  function taxPrice($tanka, $kosu) {
    global $tax;
    $ryoukin = $tanka * $kosu * (1+$tax);
    echo "{$ryoukin}円です。";
  }

  taxPrice(250, 4);
  echo "税込み" . $tax*100 , "%";
  ?>
</body>
</html>
