<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ひらがなをカタカナに変換する</title>
</head>
<body>
  <?php
  $yomi = "ふじのさぶろう";
  $hankaku_katakana = mb_convert_kana($yomi, "h");
  $zenkaku_katakana = mb_convert_kana($yomi, "C");
  echo $hankaku_katakana, "\n";
  echo $zenkaku_katakana, "\n";
  ?>
</body>
</html>
