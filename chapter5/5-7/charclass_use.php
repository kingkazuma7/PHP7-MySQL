<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字クラスを使う</title>
</head>
<body>
  <pre>
  <?php
    $pattern = "/[赤青緑]の玉/u";
    var_dump(preg_match($pattern, "それは赤の玉です。"));
    var_dump(preg_match($pattern, "青の玉が２個です"));
    var_dump(preg_match($pattern, "緑の玉でした"));
    var_dump(preg_match($pattern, "緑の箱でした"));
  ?>
  </pre>
</body>
</html>
