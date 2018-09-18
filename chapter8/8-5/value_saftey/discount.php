<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>金額の計算</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
    require_once("../../lib/util.php");
    if (!cken($_POST)){
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding ;
      exit($err);
    }
    $_POST = es($_POST);
  ?>

<!-- 隠しフィールドから値を受け取る -->
  <?php
  $errors = [];
  if (isset($_POST['discount'])) {
    $discount = $_POST['discount'];
    if (!is_numeric($discount)) {
      $errors[] = "割引率の数値エラー";
    }
  } else {
    $errors[] = "割引率が未設定";
  }
  if (isset($_POST['tanka'])) {
    $tanka = $_POST['tanka'];
    if (!ctype_digit($tanka)) {
      $errors[] = "単価の数値エラー";
    }
  } else {
    $errors[] = "単価が未設定";
  }
  ?>
<!-- 隠しフィールドから値を受け取る -->

<!-- 入力フィールドからの値を受け取る -->
  <?php
    if (isset($_POST['kosu'])) {
      $kosu = $_POST['kosu'];
      if (!ctype_digit($kosu)){
        $errors[] = "個数は整数で入力してください";
      }
    } else {
      $errors[] = "個数が未設定";
    }
  ?>
<!-- 入力フィールドからの値を受け取る -->

<?php
  if (count($errors)>0){
    echo '<ol class="error">';
    foreach ($errors as $value) {
      echo "<li>" ,$value, "</li>";
    }
    echo "</ol>";
  } else {
    $price = $tanka * $kosu;
    $discount_price = floor($price * $discount);
    $off_price = $price - $discount_price;
    $off_per = (1 - $discount) * 100;
    
    $tanka_fmt = number_format($tanka);
    $discount_price_fmt = number_format($discount_price);
    $off_price_fmt = number_format($off_price);

    echo "単価：{$tanka_fmt}円、","個数：{$kosu}個","<br>";
    echo "金額：{$discount_price_fmt}円","<br>";
    echo "（割引：-{$off_price_fmt}円、{$off_per}% OFF）","<br>";
  }
?>

<form action="discountForm.php" method="post">
  <ul>
    <li><input type="submit" value="戻る"></li>
  </ul>
</form>
</body>
</html>
