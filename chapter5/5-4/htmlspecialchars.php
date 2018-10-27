<?php
$msg = "東京<->京都 'Eat & Run'ツアー";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>エンティティ変換</title>
</head>
<body>
  <?php
  echo $msg, "<br>";
  echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
  ?>
</body>
</html>
