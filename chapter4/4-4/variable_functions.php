<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>可変関数</title>
</head>
<body>
  <?php
  function hello($who){
    echo "{$who}さん、こんにちは";
  }

  function bye($who){
    echo "{$who}さん、さようなら";
  }

  $msg = "bye";
  if (function_exists($msg)){
    $msg("金太郎");
  }
  ?>
</body>
</html>
