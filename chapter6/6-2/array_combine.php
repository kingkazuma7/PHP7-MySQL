<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>２つの配列から連想配列を作る</title>
</head>
<body>
<pre>
<?php
$round = ["1R", "2R", "3R", "4R", "Fin"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
$result = array_combine($round, $split);
print_r($result);
?>
</pre>
</body>
</html>
