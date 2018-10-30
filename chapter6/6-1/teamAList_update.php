<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>名前のリスト</title>
</head>
<body>
  <?php
  $teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
  $teamA[1] = "石井士郎";
echo $teamA[0], "さん\n";
echo $teamA[1], "さん\n";
echo $teamA[2], "さん\n";
  ?>
</body>
</html>
