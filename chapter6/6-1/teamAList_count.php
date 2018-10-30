<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>名前のリスト</title>
</head>
<body>
<pre>
<?php
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
for($i = 0; $i<count($teamA); $i++){
  echo $teamA[$i], "さん\n";
}
?>
</pre>
</body>
</html>
