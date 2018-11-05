<?php
  // クラスファイルを読み込む
  require_once("Soccer.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Soccerクラスを利用する</title>
</head>
<body>
<pre>
<?php
  $player1 = new Soccer("シンジ");
  $player1->who();
  $player1->play();
?>
<!-- マジックメソッドを試す -->
<?php
  $player2 = new Soccer("翼");
  echo "{$player2}";
?>
</pre>
</body>
</html>
