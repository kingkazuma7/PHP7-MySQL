<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  function team($name, ...$members){
    $list = implode("、", $members);
    return "{$name}：{$list}";
  }
  $team1 = team("Peach", "佐藤", "田中", "加藤");
  $team2 = team("カボス", "ひろし", "きえこ");
  echo $team1 . "<br>" . PHP_EOL;
  echo $team2;
  ?>
</body>
</html>
