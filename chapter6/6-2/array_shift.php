<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列の先頭の要素を取り出す</title>
</head>
<body>
<pre>
<?php
$myArray = ["a", "b", "c", "d"];
$removed = array_shift($myArray);

echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>
</pre>
</body>
</html>
