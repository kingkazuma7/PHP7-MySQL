<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>マッチした値を取り出す</title>
</head>
<pre>
<body>
<?php
$pattern = "/佐.+子/u";
$subject = <<< "names"
佐藤有紀
佐藤ゆう子
塩田智子
杉山香
佐藤さと子
names;

// マッチテスト
$result = preg_match($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result == 0){
  echo "マッチした値はありません。";
} else {
  echo "「", $matches[0], "」が見つかりました。";
}
?>
</body>
</pre>
</html>
