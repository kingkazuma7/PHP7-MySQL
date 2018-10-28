<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>パターンと置換文字を配列で指定する</title>
</head>
<body>
<pre>
<?php
$pattern = ["/開催日/u", "/開始時間/u"];
$replacement = ["金曜日", "午後2:30"];
$subject = "次回は開催日の開始時間からです。";
$result = preg_replace($pattern, $replacement, $subject);
echo $result;
?>
</pre>
</body>
</html>
