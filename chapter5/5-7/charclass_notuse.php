<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字クラスを使っていない正規表現</title>
</head>
<body>
<pre>
  <?php 
  // 赤の玉にマッチする
  $parttern = "/赤の玉/u";
  var_dump(preg_match($parttern, "赤の玉です"));
  var_dump(preg_match($parttern, "青の玉です"));
  var_dump(preg_match($parttern, "赤の箱です"));
  ?>
</pre>
</body>
</html>
