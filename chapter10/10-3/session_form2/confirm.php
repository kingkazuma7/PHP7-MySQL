<?php
session_start();
require_once("../../lib/util.php");
?>

<?php
// 文字エンコードの検証
if (!cken($_POST)){
  $encoding = mb_internal_encoding();
  $err = "Encoding Error! The expected encoding is " . $encoding ;
  $isError = true;
  // エラーメッセージを出して、以下のコードをすべてキャンセルする
  exit($err);
}
?>

<?php
// 入力データの取り出しとチェック
$error = [];
if (empty($_SESSION['name'])) {
  $error[] = "名前を入力してください";
} else {
  $name = $_SESSION['name'];
}
if (empty($_SESSION['kotoba'])) {
  $error[] = "好きな言葉を入力してください";
} else {
  $kotoba = $_SESSION['kotoba'];
}

// $_POST変数に値があれば、セッション変数に受け渡す
if (isset($_POST['dogcat'])){
  $dogcat = $_POST['dogcat'];
  $_SESSION['dogcat'] = $dogcat;
  $diffValue = array_diff($dogcat, ["犬", "猫"]);
  if (count($diffValue)>0) {
    $error[] = "犬好き猫好きの回答にエラーがありました。";
  }
  $dogcatString = implode("好きで、", $dogcat) . "好きです。";
} else {
  $dogcatString = "どちらも好きではありません。";
  $_SESSION['dogcat'] = [];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>確認ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <form>
    <?php if (count($error)>0){ ?>
      <span class="error"><?php echo implode('<br>', $error); ?></span><br>
      <span>
        <input type="button" value="戻る" onclick="location.href='input.php'">
      </span>
    <?php } else { ?>
      <!-- エラーがなかったとき -->
      <span>
        名前：<?php echo es($name); ?><br>
        好きな言葉：<?php echo es($kotoba); ?><br>
        犬猫好き？：<?php echo es($dogcatString); ?><br>
        <input type="button" value="訂正する" onclick="location.href='input.php'">
        <input type="button" value="送信する" onclick="location.href='thankyou.php'">
      </span>
    <?php } ?>
  </form>
</body>
</html>
