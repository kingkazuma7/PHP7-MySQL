<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>正規表現の基本</title>
</head>
<body>
  <?php
  $filepath = "/goods/image/cat/";
  var_dump(preg_match("/\/image\//u", $filepath));
  var_dump(preg_match("#/image/#u", $filepath));
  ?>
</body>
</html>
