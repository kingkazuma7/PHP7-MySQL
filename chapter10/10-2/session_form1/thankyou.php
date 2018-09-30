<?php
require_once("../../lib/util.php");
session_start();
$error = [];
// セッションのチェック
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
  $name = $_SESSION['name'];
  $kotoba = $_SESSION['kotoba'];
} else {
  $error[] = "セッションエラーです。";
}
// HTMLを表示する前にセッションを破棄する
killSession();
?>

<?php
function killSession() {
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);;
  }
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>完了ページ</title>
</head>
<body>
  <?php if (count($error)>0){ ?>
    <!-- エラーがあったとき -->
    <span class="error"><?php echo implode('<br>', $error); ?></span><br>
    <a href="input.html">最初のページに戻る</a>
  <?php } else { ?>
    <!-- エラーがなかった時 -->
    <span>
      次のように受付けました。ありがとうございました。
      <hr>
    </span>
    <span>
      名前：<?php echo es($name); ?><br>
      好きな言葉：<?php echo es($kotoba); ?><br>
      <a href="input.html">最初のページに戻る</a>
    </span>
  <?php } ?>
</body>
</html>
