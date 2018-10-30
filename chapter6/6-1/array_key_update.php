<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>連想配列から値を取り出す</title>
</head>
<body>
<pre>
<?php
$goods = [
  'id' => 'R56',
  'size' => 'M',
  'price' => 2340
];
$goods['price'] = 3500;
echo "id：" . $goods['id'] . "\n";
echo "サイズ：" . $goods['size'] . "\n";
echo "価格：" . number_format($goods['price']) . "円\n";
?>
</pre>
</body>
</html>
