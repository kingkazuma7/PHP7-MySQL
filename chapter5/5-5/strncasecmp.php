<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>前方一致で比較する</title>
</head>
<body>
<pre>
<?php
function check($str2){
  $str1 = "ABC";
  $result = strncasecmp($str1, $str2, strlen($str1));
  echo "{$str2}は";
  if ($result == 0){
    echo "{$str1}で始まる。\n";
  } else {
    echo "その他。\n";
  }
}
$id1 = "ABCR70";
$id2 = "xbcM65";
$id3 = "AbcW71";
$id4 = "xABC68";
check($id1);
check($id2);
check($id3);
check($id4);
?>
</pre>
</body>
</html>
