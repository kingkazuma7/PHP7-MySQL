<?php
  $tokuten = 85;
  if ($tokuten >= 80) {
    echo "素晴らしい";
  }
  echo "{$tokuten}点でした。";
  echo "<br>";

  // $sex = "woman";
  // $age = 34;
  // if ($sex == "woman") {
  //   if ($age>=30) && ($age>40) {
  //     echo "採用です。";
  //   } else {
  //     echo "30代の方を募集しています。";
  //   }
  // } else {
  //   echo "女性のみの募集です。";
  // }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>コロンで区切ったif構文</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php
    $age = 18;
  ?>
  <?php if ($age<=15):?>
    15歳以下の料金は500円です。<br>
  <?php elseif ($age<=19):?>
    16才から19才は2,000円です。<br>
  <?php else:?> 
    20才以上は2,500円です。
  <?php endif;?>

</body>
</html>
