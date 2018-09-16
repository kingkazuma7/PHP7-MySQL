<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>フォーム入力チェック</title>
</head>
<body>
  <?php
    require_once('../../lib/util.php');
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding;
      exit($err);
    }
    $_POST = es($_POST);
  ?>

  <?php
    $isError = false;
    if (isset($_POST['name'])) {
      $name = trim($_POST['name']);
      if($name === '') {
        // 空白エラー
        $isError = true;
      }
    } else {
      // 未設定の時のエラー
      $isError = true;
    }
  ?>

  <?php if ($isError): ?>
    <!-- エラーのとき -->
    <span class="error">名前を入力してください</span>
    <form action="nameCheckForm.php" method="post">
      <input type="submit" value="戻る">
    </form>
  <?php else: ?>
    <!-- エラーがなかった時 -->
    <span>こんにちは、<?php echo $name; ?>さん。</span>
  <?php endif; ?>
</body>
</html>
