<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>XSS対策（es）</title>
</head>
<body>
<?php
  require_once('lib/util.php');
  $myCode = "<h2>テスト1</h2>";
  $myArray = ["a" => "<p>赤</p>",
              "b" => "<script>alert('hello)</script>" ];
  // es()でHTMLエスケープして表示する
  echo '$myCodeの値；', es($myCode);
  echo "\n\n";
  echo 'myArrayの値：';
  print_r(es($myArray));
?>
</body>
</html>
