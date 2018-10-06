<?php
require_once("../../lib/util.php");
if (isset($_COOKIE["visitedLog"])) {
  $logdata = $_COOKIE["visitedLog"];
  $counter = $logdata["counter"];
  $time = $logdata["time"];
  $lasttime = date("Y年n月j日 A g時i分", $time);
} else {
  $counter = 0;
  $lasttime = "今回が初めての訪問";
}
// 訪問ログをクッキにー保存
$result1 = setcookie('visitedLog[counter]', ++$counter, time()+60*60*24);
$result2 = setcookie('visitedLog[time]', time(), time()+60*60*24);
$result = ($result1 && $result2);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 1</title>
  <link rel="stylesheet" href="../../css/style.csss">
</head>
<body>
  <div>
    <?php
      if ($result) {
        echo "このページの訪問は", es($counter), "回目です。", "<br>";
        echo "前回の訪問：", es($lasttime), "<hr>";
        echo '<a href="page2.php">ページを移動する</a>',"<br>";
        echo '<a href="reset_log.php">リセットする</a>',"<br>";
      } else {
        echo '<span class="error">クッキーが利用できませんでした。</span>';
      }
    ?>
  </div>
</body>
</html>
