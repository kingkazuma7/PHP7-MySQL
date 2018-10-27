<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>URLデコードする</title>
</head>
<body>
<?php
$encode = "PHP%207%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB.html";
$decode = rawurldecode($encode);
echo $decode;

?>
</body>
</html>
