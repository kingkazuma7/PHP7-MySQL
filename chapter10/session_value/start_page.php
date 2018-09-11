<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>セッション開始ページ</title>
</head>
<body>
  <h2>このページから購入するとクーポンが適用されます</h2>
  <?php
    $_SESSION["coupon"] = "ABC123";
  ?>
  <a href="goal_page.php">次のページへ</a>
</body>
</html>
