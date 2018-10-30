<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列から文字列を作る</title>
</head>
<body>
<pre>
<?php
$data = ["赤井一郎", "伊藤　淳", "上野信二"];
$glue = "さん";
$nameList = implode($data,$glue);
$nameList .= "さん";
print_r($nameList);
?>
</pre>
</body>
</html>
