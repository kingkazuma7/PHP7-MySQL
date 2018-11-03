<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>配列の値を合計する</title>
</head>
<body>
<?php
$valuelist = [5, -3, 12, 6, 9, 9, 100];
$sum = 0;
foreach($valuelist as $value){
  if ($value>0){
    $sum += $value;
  }
}
echo "正の値の合計は{$sum}です。";
?>
</body>
</html>
