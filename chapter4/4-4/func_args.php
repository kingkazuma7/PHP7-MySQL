<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>引数の個数を固定しない関数</title>
</head>
<body>
  <?php
  function myFunc(){
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();
    if ($numArgs>0) {
      $average = $total/$numArgs;
      $lastValue = func_get_arg($numArgs-1);
    } else {
      $lastValue = $average = $total = "（データ無し）";
    }
    echo "合計点", $total , "\n";
    echo "平均点", $average, "\n";
    echo "最後の点数", $lastValue, "\n";
  }

  myFunc(43, 67, 55, 75, 55, 33);
  ?>
</body>
</html>
