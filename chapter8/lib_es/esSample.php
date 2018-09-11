<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>XSS対策 es()</title>
</head>
<body>
  <div>
  <pre>
  <?php
  require_once('./util.php');
  $mycode = "<h2>テスト１</h2>"
  $myArray = ["a"=>"<p>赤</p>", "b"=>"<script>alert('hello')</script>"];
  // esでHTMLエスケープ
  echo '$mycodeの値', es($mycode);
  echo "¥n¥n";
  echo '$myArrayの値';
  print_r(es($myArray));
  ?>
  </pre>
  </div>
</body>
</html>
