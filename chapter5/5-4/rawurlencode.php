<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字列をURLエンコードする</title>
</head>
<body>
  <?php
  $page = "PHP 7サンプル.html";
  $path = rawurlencode($page);
  $url = "http://sample.com/{$path}";
  echo $url;
  ?>
</body>
</html>
