<?php
session_start();
require_once("../../lib/util.php");

// $_POST変数に$name,$kotobaの値があればセッション変数に受け渡す
if (isset($_POST['name'])) {
  $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['kotoba'])) {
  $_SESSION['kotoba'] = $_POST['kotoba'];
}
if (empty($_SESSION['dogcat'])) {
  $dogcat = [];
} else {
  $dogcat = $_SESSION['dogcat'];
}
?>

<?php
function checked($value, $question) {
  if (is_array($question)) {
    $isChecked = in_array($value, $question);
  } else {
    $isChecked = ($value===$question);
  }
  if ($isChecked) {
    echo "checked";
  } else {
    echo "";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>犬好きネコ好きページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <form action="confirm.php" method="post">
      <ul>
        <li><span>犬が好きですか？猫が好きですか？</span><br>
          <label><input type="checkbox" name="dogcat[]" value="犬" <?php checked("犬", $dogcat); ?> ></label><br>
          <label><input type="checkbox" name="dogcat[]" value="猫" <?php checked("猫", $dogcat); ?> ></label><br>
        </li>
        <input type="button" value="戻る" onclick="location.href='input.php'">
        <input type="submit" value="確認する">
      </ul>
    </form>
  </div>
</body>
</html>
