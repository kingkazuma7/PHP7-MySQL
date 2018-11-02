<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>配列の連結 array_merge</title>
</head>
<body>
<pre>
<?php
$a = ["a","b","c"];
$b = ["d","e","f"];
$c = ["g","h","i"];
$result = array_merge($a, $b, $c);
print_r($result);
?>
</pre>
</body>
</html>
