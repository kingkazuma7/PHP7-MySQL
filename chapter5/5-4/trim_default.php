<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字列の前後にある不要文字削除</title>
</head>
<body>
  <?php
  $msg = "\tHello World!!    \n\n";
  $result = trim($msg);
  echo "処理前：\n";
  echo "[", $msg, "]\n";
  echo "処理後：\n";
  echo "[", $result, "]\n";
  ?>
</body>
</html>
