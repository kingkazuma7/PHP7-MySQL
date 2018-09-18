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
    // 割引率
    $discount = 0.8;
    $off = (1 - $discount)*100;
    if ($discount > 0) {
      echo "<h2>このページでの購入は{$off}% OFFになります！</h2>";
    }
    // 単価の設定
    $tanka = 2900;
    $tanka_fmt = number_format($tanka);
  ?>

  <!-- 入力フォームの作成 -->
  <form action="discount.php" method="post">
    <!-- 隠しフィールドに割引率と単価を設定してPOSTする -->
    <input type="hidden" name="discount" value="<?php echo $discount; ?>">
    <input type="hidden" name="tanka" value="<?php echo $tanka; ?>">
    <ul>
      <li><label>単価：<?php echo $tanka_fmt; ?>円</label></li>
      <li><label>個数：
      <input type="number" name="kosu">
      </label></li>
      <li><input type="submit" value="計算する"></li>
  </form>

</body>
</html>
