<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
    require_once("../../lib/util.php");
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " .$encoding ;
      exit($err);
    }
    $_POST = es($_POST);
  ?>

  <?php
    // エラー配列の準備
    $errors = [];
  ?>

  <?php
  // 合計金額のチェック
  if (isset($_POST['goukei'])) {
      $goukei = $_POST['goukei'];
      if (!ctype_digit($goukei)) {
        // 0以上の整数でない時
        $errors[] = "合計金額を整数で入力してください";
      }
    } else {
        // 未記入のエラー
        $errors[] = "合計金額が未設定";
      }
    // 人数のチェック
    if (isset($_POST['ninzu'])) {
      $ninzu = $_POST['ninzu'];
      if (!ctype_digit($ninzu)) {
        // 0以上の整数でないエラー
        $errors[] = "人数を整数で入力してください";
      } else if ($ninzu == 0) {
        $errors[] = "0人では割れません";
      }
    } else {
      $errors[] = "人数が未設定";
    }
  ?>

  <?php
    // エラーが会った時
    if (count($errors)>0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>" ,$value, "</li>";
      }
      echo "</ol>";
  ?>

  <!-- 戻りボタンのフォーム -->
  <form method="POST" action="warikanForm.php">
    <ul>
      <li><input type="submit" value="戻る"></li>
    </ul>
  </form>

  <?php
  // エラーがなかったとき
  } else {
    $amari = $goukei % $ninzu;
    $price = ($goukei - $amari) / $ninzu;
    // 3桁とり
    $goukei_fmt = number_format($goukei);
    $price_fmt = number_format($price);
    // 表示
    echo "{$goukei_fmt}円を{$ninzu}人で割り勘します。",
    "<br>";
    echo "1人あたり{$price_fmt}円を支払えば、不足分は{$amari}円です。";
  }
  ?>
</body>
</html>
