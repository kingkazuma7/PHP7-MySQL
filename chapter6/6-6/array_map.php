<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>コールバック関数で、配列に入っている円をドルに換算する</title>
</head>
<body>
  <?php
    function exchange($value) {
      global $rate;
      if ($rate == 0) {
        $rate = 1;
      } 
      $exPrice = $value/$rate;
      $exPrice = round($exPrice*100)/100;
      return $exPrice;
    }

    $priceYen = [2300, 1200, 4000];
    $rate = 112.50;
    $priceDollar = array_map("exchange", $priceYen);
    print_r($priceDollar);
  ?>
</body>
</html>
