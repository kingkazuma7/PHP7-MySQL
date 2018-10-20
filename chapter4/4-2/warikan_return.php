<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ユーザ定義関数を使って計算する</title>
</head>
<body>
  <?php
  function warikan($total, $ninzu) {
    if ($ninzu<=0){
      return;
    }
    $result = $total/$ninzu;
    echo "{$total}円を{$ninzu}人で割ると{$result}円。";
    echo "<br>" . "PHP_EOL";
  }
  warikan(2500, 2);
  warikan(3000, 0);
  warikan(5500, 4);
  warikan(10000, 4);
  ?>
</body>
</html>
