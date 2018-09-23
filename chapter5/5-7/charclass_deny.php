<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字クラス否定</title>
</head>
<body>
<pre>
  <?php
  $pattern = "/[^青赤]木/u";
  var_dump(preg_match($pattern, "大木"));
  var_dump(preg_match($pattern, "青木"));
  var_dump(preg_match($pattern, "赤木"));
  var_dump(preg_match($pattern, "赤木、大木"));
  ?>
</pre>
</body>
</html>
