<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字クラス 範囲</title>
</head>
<body>
  <pre>
  <?php
    $pattern = "/[A-F][1-9]/u";
    var_dump(preg_match($pattern, "B8"));
    var_dump(preg_match($pattern, "B7"));
    var_dump(preg_match($pattern, "D6"));
    var_dump(preg_match($pattern, "a2"));
    var_dump(preg_match($pattern, "1A"));
  ?>
  </pre>
</body>
</html>
