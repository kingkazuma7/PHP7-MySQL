<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>マッチした値を全て取り出す</title>
</head>
<body>
<?php
$pattern = "/201[2-5](AX|FX)/i";
$subject = "2011AX, 2012Fx, 2012AF, 2012FX, 2013FX, 2015ax, 2016Fx";
$result = preg_match_all($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result == 0){
  echo "マッチした形式はありません。";
} else {
  echo "{$result}個マッチしました。";
  echo implode("、", $matches[0]);
}
?>
</body>
</html>
