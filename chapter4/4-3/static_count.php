<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>スタティック変数</title>
</head>
<body>
  <?php
  function countUp() {
    static $count = 0;
    $count += 1;
    return $count;
  }
  for ($i=1; $i<=10; $i++) {
    $num = countUp();
    echo "{$num}回目";
  }
  ?>
</body>
</html>
