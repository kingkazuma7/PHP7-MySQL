<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>前後にある全角空白と改行を削除する</title>
</head>
<body>
<pre>
<?php
$msg = "　東京都江戸川区　\n\n";
$result = trim($msg, "\x20\t\n\r\0\v　");
echo "処理前:\n";
echo "[", $msg, "]\n";
echo "処理後:\n";
echo "[", $result, "]\n";
?>
</pre>
</body>
</html>
