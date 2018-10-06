<?php
require_once('../../lib/util.php')
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クッキー確認ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
  // クッキー変数を調べる
  echo "クッキーを確認しました。","<br>";
  if(isset($_COOKIE["message"])) {
    echo '<a href="delete_cookie.php">クッキーを削除する</a>';
  } else {
    echo "クッキーはありません。", "<hr>";
    echo '<a href="set_cookie.php">クッキーを設定するページへ</a>';
  }
  ?>
</body>
</html>
