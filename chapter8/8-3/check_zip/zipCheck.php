<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>フォーム入力チェック</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php
  require_once("../../lib/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // エラーメッセージを出して、以下のコードをすべてキャンセルする
    exit($err);
  }
  // HTMLエスケープ（XSS対策）
  $_POST = es($_POST);
?>

<?php
  $errors = [];
  if (isset($_POST['zip'])) {
    $zip = trim($_POST['zip']);
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $zip)) {
      $errors[] = "郵便番号を正しく入力してください";
    }
  } else {
    $errors[] = "郵便番号が記入されていません。";
  }
?>

<?php
  if (count($errors)>0) {
    echo '<ol class="error">';
    foreach ($errors as $value) {
      echo "<li>" ,$value, "</li>";
    }
    echo '</ol>';
  } else {
    echo "郵便番号は{$zip}です。";
  }
?>

<!-- 戻りボタンのフォーム -->
<form method="POST" action="zipCheckForm.php">
    <ul>
      <li><input type="submit" value="戻る"></li>
    </ul>
  </form>
</body>
</html>
