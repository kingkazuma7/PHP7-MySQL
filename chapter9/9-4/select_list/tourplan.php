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
        $mealSelected = $_POST["meal"];
      } else {
        $mealSelected = [];
        $error[] = "「食事」に入力エラーがありました。";
      }
    } else {
      $mealSelected = [];
    }

    // ツアー
    if (isset($_POST["tour"])) {
      $tours = ["カヌー","MTB","トレラン"];
      $diffValue = array_diff($_POST["tour"], $tours);
      if (count($diffValue)==0) {
        $tourSelected = $_POST["tour"];
      } else {
        $tourSelected = [];
        $error[] = "「ツアー」に入力エラーがありました。";
      }
    } else {
      $tourSelected = [];
    }
  ?>

  <?php
    // チェック
    function selected($value, $question) {
      if (is_array($question)) {
        $isSelected = in_array($value, $question);
      } else {
        $isSelected = ($value===$question);
      }
      if ($isSelected) {
        echo "selected";
      } else {
        echo "";
      }
    }
  ?>

  <!-- 入力フォーム -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="post">
    <ul>
      <li><span>食事：</span>
        <select name="meal[]" size="2" multiple>
          <option value="朝食" <?php selected("朝食", $mealSelected); ?> >朝食</option>
          <option value="夕食" <?php selected("夕食", $mealSelected); ?> >夕食</option>
        </select>
      </li>
      <li><span>ツアー：</span>
        <select name="tour[]" size="3" multiple>
          <option value="カヌー" <?php selected("カヌー", $tourSelected) ; ?> >カヌー</option>
          <option value="MTB" <?php selected("MTB", $tourSelected); ?> >MTB</option>
          <option value="トレラン" <?php selected("トレラン", $tourSelected); ?> >トレラン</option>
        </select>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>
  <!-- 入力フォーム -->

  <?php
    $isSlected = count($mealSelected)>0 || count($tourSelected)>0;
    if ($isSlected) {
      echo "<hr>";
      echo "お食事：" ,implode("と", $mealSelected), "<br>";
      echo "ツアー：" ,implode("と", $tourSelected), "<br>";
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
