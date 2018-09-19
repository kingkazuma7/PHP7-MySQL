<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>割引購入ページ</title>
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
    /* 再入力ならば前回の値を初期値にする */
    // 個数に値があるかどうか
    if (isset($_POST['kosu'])){
      $kosu = $_POST['kosu'];
    } else {
      $kosu = "";
    }
  ?>

  <?php
    require_once("saledata.php");
    $couponCode = "ha45as";
    $goodsID = "ax102";
    $discount = getCouponRate($couponCode);
    $tanka = getPrice($goodsID);
    if (is_null($discount)||is_null($tanka)) {
      $err = '<div class="error">不正な操作がありました。</div>';
      exit($err);
    }
  ?>

  <?php
    // 割引率
    $off = (1 - $discount)*100;
    if ($discount > 0) {
      echo "<h2>このページでの購入は{$off}% OFFになります！</h2>";
    }
    // 単価の設定
    $tanka_fmt = number_format($tanka);
  ?>

  <!-- 入力フォームの作成 -->
  <form action="discount.php" method="post">
    <!-- 隠しフィールドに割引率と単価を設定してPOSTする -->
    <input type="hidden" name="couponCode" value="<?php echo $couponCode; ?>">
    <input type="hidden" name="goodsID" value="<?php echo $goodsID; ?>">
    <ul>
      <li><label>単価：<?php echo $tanka_fmt; ?>円</label></li>
      <li><label>個数：
      <input type="number" name="kosu">
      </label></li>
      <li><input type="submit" value="計算する"></li>
  </form>

</body>
</html>
