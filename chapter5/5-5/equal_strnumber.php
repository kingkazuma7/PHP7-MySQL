<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>文字列と数値を比較する</title>
</head>
<body>
<pre>
<?php
function check($a, $b){
  if($a == $b){
    echo "{$a}と{$b}は","同じ。\n";
  } else {
    echo "{$a}と{$b}は","違う。\n";
  }
}
check("7cm", "7cm");
check("7km", "7cm");
check("7人", 7); // キャスト(数値変換)
check("七", 0); // キャスト(数値変換)
check("俺やで", 0); // キャスト(数値変換)
?>
</pre>
</body>
</html>
