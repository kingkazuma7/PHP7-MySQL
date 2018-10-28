<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>サブパターンの値を取り出す</title>
</head>
<body>
<pre>
<?php
$pattern = "/2013([A-F])-(..)/i";
$subject = "2012A-sx, 2013F-fx, 2013G-fx, 2013A-dx, 2015a-sx";
$result = preg_match_all($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result == 0) {
  echo "マッチした型式はありません。";
} else {
  $all = implode("、", $matches[0]);
  $model = implode("、", $matches[1]);
  $type = implode("、", $matches[2]);
echo "：見つかった型式{$all}", "\n";
echo "：モデル{$model}", "\n";
echo "：タイプ{$type}", "\n";
}
?>
</pre>
</body>
</html>
