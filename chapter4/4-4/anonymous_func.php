<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>無名関数</title>
</head>
<body>
  <?php
  $myFunc = function($who){
    echo "{$who}さん、こんにちは";
  };
  $myFunc("田中");
  ?>
</body>
</html>
