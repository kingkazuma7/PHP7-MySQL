<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>チェックボックス</title>
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
    // 食事　
    if (isset($_POST["meal"])) {
      $meals = ["朝食", "夕食"];
      // $mealsに朝食、夕食以外の文字列が含まれていれば取り出す
      $diffValue = array_diff($_POST["meal"], $meals);
      if (count($diffValue)==0) {
        $mealChecked = $_POST["meal"];
      } else {
        $mealChecked = [];
        $error[] = "「食事」に入力エラーがありました。";
      }
    } else {
      $mealChecked = [];
    }
  ?>

  <?php
  // ツアー
  if (isset($_POST["tour"])) {
    $tours = ["カヌー","MTB","トレラン"];
    $diffValue = array_diff($_POST["tour"], $tours);
    if (count($diffValue)==0) {
      $tourChecked = $_POST["tour"];
    } else {
      $tourChecked = [];
      $error[] = "「ツアー」に入力エラーがありました。";
    }
  } else {
    $tourChecked = [];
  }
  ?>

  <?php
    // チェック
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

  <!-- 入力フォーム -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="post">
    <ul>
      <li><span>食事：</span>
        <label><input type="checkbox" name="meal[]" value="朝食" <?php checked("朝食", $mealChecked); ?>>朝食</label>
        <label><input type="checkbox" name="meal[]" value="夕食" <?php checked("夕食", $mealChecked); ?>>夕食</label>
      </li>
      <li><span>ツアー：</span>
      <label><input type="checkbox" name="tour[]" value="カヌー" <?php checked("カヌー", $tourChecked); ?>>カヌー</label>
      <label><input type="checkbox" name="tour[]" value="MTB" <?php checked("MTB", $tourChecked); ?>>MTB</label>
      <label><input type="checkbox" name="tour[]" value="トレラン" <?php checked("トレラン", $tourChecked); ?>>トレラン</label>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>
  <!-- 入力フォーム -->

  <?php
    $isSlected = count($mealChecked)>0 || count($tourChecked)>0;
    if ($isSlected) {
      echo "<hr>";
      echo "お食事：" ,implode("と", $mealChecked), "<br>";
      echo "ツアー：" ,implode("と", $tourChecked), "<br>";
    } else {
      echo "<hr>";
      echo "選択されているものがありません。";
    }
  ?>

  <?php
    if (count($error)>0) {
      echo "<HR>";
      echo '<span class="error">' ,implode("<br>", $error), '</span>';
    }
  ?>
  
</body>
</html>
