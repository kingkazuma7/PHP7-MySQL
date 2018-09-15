<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>不正なエンコーディングによる攻撃対策 cken()</title>
</head>
<body>
<?php
  require_once("lib/util.php");
  $utf8_string = "こんにちは";
  $sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');
  $encoding = mb_internal_encoding();
  if (cken([$sjis_string])) {
    echo '配列の値は、' ,$encoding, 'です。';
  } else {
    echo '配列の値は、' ,$encoding, 'ではありません。';
  }
?>
</body>
</html>
