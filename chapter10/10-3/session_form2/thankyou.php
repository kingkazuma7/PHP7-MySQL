<?php
require_once("../../lib/util.php");
// セッションの開始
session_start();
// セッションのチェック
$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])){
  // セッション変数から値を取り出す
  $name = $_SESSION['name'];
  $kotoba = $_SESSION['kotoba'];
  $dogcat = $_SESSION['dogcat'];
  $dogcatString = implode("好きで、", $dogcat) . "好きです。";
} else {
  // セッション変数が空だったとき
  $error[] = "セッションエラーです。";
}
// HTMLを表示する前にセッションを終了する
killSession()
?>

<?php
// セッションを破棄する
function killSession(){
  // セッション変数の値を空にする
  $_SESSION = [];
  // セッションクッキーを破棄する
  if (isset($_COOKIE[session_name()])){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);
  }
  // セッションを破棄する
  session_destroy();
}
?>

<?php
// セッションの開始
session_start();
require_once("../../lib/util.php");

// $_POST変数に値があれば セッション変数に受け渡す
if (isset($_POST['name'])){
  $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['kotoba'])){
  $_SESSION['kotoba'] = $_POST['kotoba'];
}
// セッション変数に値があれば受け渡す
if (empty($_SESSION['dogcat'])){
  $dogcat = [];
} else {
  $dogcat = $_SESSION['dogcat'];
}
?>

<?php
// 初期値でチェックするかどうか
function checked($value, $question){
  if (is_array($question)){
    // 配列のとき、値が含まれていればtrue
    $isChecked = in_array($value, $question);
  } else {
    // 配列ではないとき、値が一致すればtrue
    $isChecked = ($value===$question);
  }
  if ($isChecked) {
    // チェックする
    echo "checked";
  } else {
    echo "";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>犬好き猫好きページ</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  アンケート（２／２）<br>
  <form method="POST" action="confirm.php">
    <ul>
      <li><span>犬が好きですか？猫が好きですか?</span><br>
      <label><input type="checkbox" name="dogcat[]" value="犬" <?php checked("犬", $dogcat); ?> >犬が好き</label><br>
      <label><input type="checkbox" name="dogcat[]" value="猫" <?php checked("猫", $dogcat); ?> >猫が好き</label>
      </li>
      <input type="button" value="戻る" onclick="location.href='input.php'">
      <input type="submit" value="確認する">
    </ul>
  </form>
</div>
</body>
</html>

