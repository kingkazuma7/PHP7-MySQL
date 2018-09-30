<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>年月日プルダウンメニュー</title>
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
  $theYear = date('Y');
  $theMonth = date('n');
  $theDay = date('j');
  $error = [];
  if (isset($_POST["year"])&&
      isset($_POST["month"])&&
      isset($_POST["day"])) {
        $theYear = $_POST["year"];
        $theMonth = $_POST["month"];
        $theDay = $_POST["day"];
        $isDate = checkdate($theMonth, $theDay, $theYear);
        if (!$isDate) {
          $error[] = "日付けとして正しくありません。";
        } else {
          $dateString = $theYear . "-" . $theMonth . "-" . $theDay;
          $dateObj = new DateTime($dateString);
        }
      } else {
        $isDate = false;
      }
  ?>

  <?php
  // 今年の前後15年のプルダウン
  function yearOption() {
    global $theYear;
    $thisYear = date('Y');
    $startYear = $thisYear - 15;
    $endYear = $thisYear + 15;
    echo '<select name="" >', '\n';
    for ($i = $startYear; $i <= $endYear; $i++) {
      if ($i==$theYear) {
        echo "<option value={$i} selected>{$i}</option>", "\n";
      } else {
        echo "<option value={$i}>{$i}</option>", "\n";
      }
    }
    echo '</select>';
  }

  // 1~12月のプルダウン
  function monthOption() {
    global $theMonth;
    echo '<select name="month">';
    for ($i=1; $i<=12; $i++) {
      if ($i==$theMonth) {
        echo "<option value={$i} selected>{$i}</option>", "\n";
      } else {
        echo "<option value={$i}>{$i}</option>", "\n";
      }
    }
    echo '</select>';
  }

  // 1~31日のプルダウン
  function dayOption() {
    global $theDay;
    echo '<select name="">', "\n";
    for ($i=1; $i<=31; $i++) {
      if ($i==$theDay) {
        echo "<option value={$i} selected>{$i}</option>", "\n";
      } else {
        echo "<option value={$i}>{$i}</option>", "\n";
      }
    }
    echo '</select>', "\n";
  }
  ?>

  <!-- プルダウン -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="post">
    <ul>
      <li>
        <?php yearOption(); ?>年
        <?php monthOption(); ?>月
        <?php dayOption(); ?>日
      </li>
      <li><input type="submit" value="送信"></li>
    </ul>
  </form>

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
    // エラー表示
    if (count($error)>0){
      echo "<HR>";
      // 値を"<br>"で連結して表示する
      echo '<span class="error">', implode("<br>", $error), '</span>';
    }
    ?>
</body>
</html>
