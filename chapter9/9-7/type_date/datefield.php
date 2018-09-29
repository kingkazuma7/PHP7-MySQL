<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>日付フィールド</title>
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
  $error = [];
  if (!empty($_POST["theDate"])) {
    $postDate = trim($_POST["theDate"]);
    $postDate = mb_convert_kana($postDate, "as");
    $pattern1 = preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $postDate);
    $pattern2 = preg_match("#^[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}$#", $postDate);
    if ($pattern1) {
      $dateArray = explode("-", $postDate);
    }
    if ($pattern2) {
      $dateArray = explode("/", $postDate);
    }
    if ($pattern1||$pattern2) {
      $theYear = $dateArray[0];
      $theMonth = $dateArray[1];
      $theDay = $dateArray[2];
      $isDate = checkdate($theMonth, $theDay, $theYear);
      if ($isDate) {
        $dateObj = new DateTime($postDate);
      } else {
        $error[] = "日付として正しくありません";
      }
    } else {
      $today = new Datetime();
      $today1 = $today->format("Y-n-j");
      $today2 = $today->format("Y/n/j");
      $error[] = "日付は次のどちらかの形式で入力してください。<br>{$today1} または {$today2}";
      $isDate = false;
    }
  } else {
    $isDate = false;
    $postDate = "";
  }
  ?>

  <!-- 入力フォーム -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="POST">
    <ul>
      <li><span>日付を選ぶ</span>
      <input type="date" name="theDate" value=<?php echo "{$postDate}" ?>>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>

  <!-- 日付け -->
  <?php
  if ($isDate) {
    $date = $dateObj->format("Y年m月d日");
    $w = (int)$dateObj->format("w");
    $week = ["日", "月", "火", "水", "木", "金", "土"];
    $youbi = $week[$w];
    echo "<hr>";
    echo "{$date}は、{$youbi}曜日です。";
  }
  ?>

  <?php
  if (count($error)>0) {
    echo "<hr>";
    echo '<span class="error">' , implode("<br>", $error), '</span>';
  }
  ?>
</body>
</html>
