<?php
require_once("../../lib/util.php");
$fruits = ["りんご", "みかん", "レモン", "バナナ","ざくろ"];
$valueString = implode("&", $fruits);
$result = setcookie("fruits", $valueString);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クッキーを確認する</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
      if ($result) {
        echo "好きなフルーツを保存しました。", "<hr>";
        echo '<a href="check_cookie.php">クッキーを確認する</a>';
      } else {
        echo '<span class="error">クッキーが利用できませんでした。</span>';
      }
    ?>
</body>
</html>
