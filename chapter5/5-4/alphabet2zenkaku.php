<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>半角の英数記号文字、スペースを全角に変換する</title>
</head>
<body>
<?php
$msg = "Hello! PHP7をはじめよう。";
echo mb_convert_kana($msg , "AS");
?>
</body>
</html>
