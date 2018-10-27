<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>全角の英数記号、全角スペースを半角にする<</title>
</head>
<body>
  <?php
  $msg = "Ｈｅｌｌｏ！　ＰＨＰ７をはじめよう。";
  echo $msg . "\n";
  $msg = "Ｈｅｌｌｏ！　ＰＨＰ７をはじめよう。";
  echo mb_convert_kana($msg, "as");
  ?>
</body>
</html>
