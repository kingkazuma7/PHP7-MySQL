<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列の要素を削除する</title>
</head>
<body>
<?php
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];
$removed = array_splice($myArray, 1, 2);
echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>
</body>
</html>
