<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>計算ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
    require_once('../../lib/util.php');
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . 
      $encoding ;
      exit($err);
    }
      $_POST = es($_POST);
  ?>

  <?php
  // POSTされた値を取り出す
  if (isset($_POST["mile"])) {
    $isNum = is_numeric($_POST["mile"]);
    if ($isNum) {
      $mile = $_POST["mile"];
      $error = "";
    } else {
      $mile = "";
      $error = '<span class="error">⇆数字を入力してください</span>';
    }
  } else {
  // POSTされた値がない時
    $isNum = false;
    $mile = "";
    $error = "";
  }
  ?>

  <!-- 入力フォーム -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="post">
    <ul>
      <li>
        <label>マイルをkmに換算：
        <input type="text" name="mile" value="<?php echo $mile; ?>"></label>
        <?php echo $error; ?>
      </li>
      <li><input type="submit" value="計算する"></li>
    </ul>
  </form>
  <!-- 入力フォーム -->

  <?php
    if ($isNum) {
      echo "<HR>";
      $kilometer = $mile * 1.609344;
      echo "{$mile}マイルは{$kilometer}です。";
    }
  ?>
</body>
</html>
