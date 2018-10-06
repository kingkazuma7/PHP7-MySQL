<?php
require_once("../../lib/util.php");
if (isset($_COOKIE['visitedCounter'])) {
  $visitedCount = $_COOKIE["visitedCount"];
} else {
  // クッキーがない場合
  $visitedCount = 0;
}
$result = setcookie("visitedCount", ++$visitedCount, time()+60*5);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 1</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
      if ($result) {
        echo "このページの訪問は", es($visitedCount), "回目です。";
        "<hr>";
        echo '<a href="page2.php">ページを移動する</a>', "<br>";
        echo '<a href="reset_counter.php">リセットする</a>';
      } else {
        echo '<span class="error">クッキーが利用できませんでした。</span>';
      }
      // var_dump($result);
    ?>
  </div>
</body>
</html>
