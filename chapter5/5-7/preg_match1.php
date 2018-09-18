<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>正規表現の基本</title>
</head>
<body>
  <pre>
  <?php
    // 探しているナンバー
    $result1 = preg_match("/46-49/u", "確か49-46でした");
    $result2 = preg_match("/46-49/u", "たぶん46-49だった");
    $result3 = preg_match("/46-49u", "49-46");
    var_dump($result1);
    var_dump($result2);
    var_dump($result3);
  ?>
  </pre>
</body>
</html>
