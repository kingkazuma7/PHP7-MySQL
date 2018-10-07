<?php
require_once("../../lib/util.php");
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
    if (isset($_COOKIE["gamedata"])) {
      // 訪問ログの値を取り出す
      $dataQueryString = $_COOKIE["gamedata"];
      parse_str($dataQueryString, $gamedata);
      $gamedata = es($gamedata);
      foreach ($gamedata as $key => $value) {
        echo "{$key}：{$value}","<br>";
      }
      echo "<hr>";
    } else {
      echo "クッキーはありません。", "<hr>";
    }
    ?>
    <a href="set_cookie.php">戻る</a>
  </div>
</body>
</html>
