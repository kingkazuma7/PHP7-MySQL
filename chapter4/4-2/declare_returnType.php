<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>引数int型として受け取る</title>
</head>
<body>
  <pre>
  <?php
  function twice(float $var):int {
    $var *= 2;
    return $var;
  }
  $num = 10.8;
  $result = twice($num);
  echo "{$num}の２倍は", $result, "<br>";
  ?>
  </pre>
</body>
</html>
