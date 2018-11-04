<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列から順にキーと値を取り出す</title>
</head>
<body>
<?php
$data = [
  "ウェルター級"=>"ジョーダンピケオー",
  "スーパーフェザー級"=>"武尊",
  "スーパーバンダム級"=>"武居"];
echo "<ul>", "\n";
foreach($data as $key => $value){
  echo "<li>" ,$key, "：" ,$value, "</li>\n";
}
echo "</ul>\n";
?>
</body>
</html>
