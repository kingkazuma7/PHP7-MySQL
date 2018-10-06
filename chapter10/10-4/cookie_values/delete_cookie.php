<?php
// クッキーを削除する
$result = setcookie("message", "", time()-3600);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クッキー削除ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
  if ($result) {
    echo "クッキーを削除しました。", "<hr>";
    echo '<a href="check_cookie.php">クッキーを確認するページへ</a>';
  } else {
    echo '<span class="error">クッキーの削除でエラーがありました。</span>', "<br>";
  }
  ?>
</body>
</html>
