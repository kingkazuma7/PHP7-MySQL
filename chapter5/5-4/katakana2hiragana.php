<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>カタカナをひらがなに変換する</title>
</head>
<body>
  <pre>
  <?php
  $yomi1 = "ｽｺｯﾄ･ﾗﾌｧﾛ";
  $yomi2 = "チャーリー・ミンガス";
  $hiragana1 = mb_convert_kana($yomi1, "HcV");
  $hiragana2 = mb_convert_kana($yomi2, "HcV");
  echo $hiragana1, "\n";
  echo $hiragana2, "\n";
  ?>
  </pre>
</body>
</html>
