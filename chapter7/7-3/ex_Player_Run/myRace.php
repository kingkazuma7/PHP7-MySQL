<?php
  // クラスファイルを読み込む
  require_once("Runner.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Runnerクラスを利用する</title>
</head>
<body>
<pre>
<?php
  // Runnerクラスのインスタンスを作る
  $runner1 = new Runner("福祉", 23);
  $runner2 = new Runner("ピケおー", 25);
  // インスタンスを確認する
  print_r($runner1);
  print_r($runner2);
?>
</pre>
</body>
</html>
