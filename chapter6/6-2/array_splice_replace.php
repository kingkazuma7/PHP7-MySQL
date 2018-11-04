<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列の要素を置換する</title>
</head>
<body>
<pre>
<?php
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>
</pre>
</body>
</html>
