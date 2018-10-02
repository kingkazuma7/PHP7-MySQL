<?php
session_start();
require_once("../../lib/util.php");
if (empty($_SESSION['name'])) {
  $name = "";
} else {
  $name = $_SESSION('name');
}
if (empty($_SESSION['kotoba'])) {
  $kotoba = "";
} else {
  $kotoba = $_SESSION['kotoba'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>入力ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <form action="dogcat.php" method="post">
    <li><label>名前：
      <input type="text" name="name" placeholder="ニックネーム可" value="<?php echo es($name) ?>";>
    </label></li>
    <li><label>好きな言葉：
      <input type="text" name="kotoba" value="<?php echo es($kotoba) ?>";>
    </label></li>
    <li><input type="submit" value="確認する"></li>
  </form>
</body>
</html>
