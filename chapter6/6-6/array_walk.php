<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列の値をドル換算してリスト表示</title>
</head>
<body>
  <?php
    function exchangeList ($value, $key, $rateData) {
      $rate = $rateData["rate"];
      if ($rate == 0) {
        return;
      }
      $price = $value/$rate;
      $exPrice = sprintf('%.02f', $price);
      echo "<li>", $rateData["symbol"], $exPrice, "</li>";
    }

    $priceList = [2300, 1200, 4000];
    $dollaryen = ["symbol"=>'$', "rate"=>112.50];
    echo "<ul>";
    array_walk($priceList, "exchangeList", $dollaryen);
    echo "</ul>";
  ?>
</body>
</html>
