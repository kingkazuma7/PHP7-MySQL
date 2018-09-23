<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ラジオボタン</title>
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
    // 性別
    if (isset($_POST["sex"])) {
      $sexValues = ["男性", "女性"];
      $isSex = in_array($_POST["sex"], $sexValues);
      if ($isSex) {
        $sex = $_POST["sex"];
      } else {
        $sex = "error";
        $error[] = "「性別」に入力エラーがありました。";
      }
    } else {
      $isSex = false;
      $sex = "男性";
    }
    // 結婚
    if (isset($_POST["marriage"])){
      $marriageValues = ["独身", "既婚", "同棲中"];
      $isMarriage = in_array($_POST["marriage"], $marriageValues);
      if ($isMarriage) {
        $marriage = $_POST["marriage"];
      } else {
        $marriage = "error";
        $error[] = "「結婚」に入力エラーがありました。";
      }
    } else {
      $isMarriage = false;
      $marriage = "独身";
    }
  ?>

  <?php
    // questionが配列かどうかのチェック
    // 配列だった場合は第一引数$valueが$questionに
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
      <li><span>性別：</span>
        <label><input type="radio" name="sex" value="男性" <?php checked("男性", $sex); ?>>男性</label>
        <label><input type="radio" name="sex" value="女性" <?php checked("女性", $sex); ?>>女性</label>
      </li>
      <li><span>結婚：</span>
      <label><input type="radio" name="marriage" value="独身" <?php checked("独身", $marriage); ?>>独身</label>
      <label><input type="radio" name="marriage" value="既婚" <?php checked("既婚", $marriage); ?>>既婚</label>
      <label><input type="radio" name="marriage" value="同棲中" <?php checked("同棲中", $marriage); ?>>同棲中</label>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>
  <!-- 入力フォーム -->

  <?php
    $isSubmited = $isSex && $isMarriage;
    if ($isSubmited) {
      echo "<HR>";
      echo "あなたは{$sex}、{$marriage}です。";
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
