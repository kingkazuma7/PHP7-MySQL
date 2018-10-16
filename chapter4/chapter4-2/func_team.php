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
    print_r($name . PHP_EOL);
    print_r($members);
  }
  team("Peach", "佐藤", "田中", "加藤");
  ?>
</body>
</html>
