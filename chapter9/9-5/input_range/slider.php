<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="XUA-Compatible" content="ie=edge">
  <title>スライダー</title>
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
  $min = 1;
  $max = 5;
  if (isset($_POST["taste"])) {
    $taste = $_POST["taste"];
    $isTaste = ctype_digit($taste) && ($taste>=$min) && ($taste<=$max);
    if (!$isTaste) {
      $error[] = "甘味の値にエラーがありました。";
      $taste = $min;
    }
  } else {
    $taste = round(($min+$max)/2);
    $isTaste = true;
  }
  ?>

  <!-- 入力フォームを作る（現在のページにPOSTする） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
  <ul>
    <li><span>甘味：</span>
    <input type="range" name="taste" min="1" max="5" step="1" value="<?php echo $taste; ?>" >
    </li>
    <li><input type="submit" value="送信する"></li>
  </ul>
  </form>

  <?php
  if ($isTaste) {
    $tasteList = ["甘い", "少し甘い", "普通", "少し苦い", "苦い"];
    echo "<hr>";
    echo "甘味は「{$taste}.{$tasteList[$taste-1]}」です。";
  }
  ?>
  <?php
  if (count($error)>0) {
    echo "<hr>";
    echo '<span class="error">', implode("<br>", $error), '</span>';
  }
  ?>
</body>
</html>
