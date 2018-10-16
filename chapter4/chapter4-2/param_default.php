<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ユーザ定義関数を使って計算する</title>
</head>
<body>
<?php
function charge($rank, $days=1) {
  switch ($rank) {
    case "A":
      $ryoukin = 15000 * $days;
      break;
    case "B":
      $ryoukin = 12000 * $days;
      break;
    case "C":
      $ryoukin = 10000 * $days;
      break;
    default:
      $ryoukin = 8000 * $days;
      break;
  }
  return $ryoukin;
}

// Bランクで２泊の場合とAランクで宿泊数を省略した場合
$kingaku1 = charge("B", 2);
$kingaku2 = charge("A");
$kingaku3 = charge("C", 4);
echo "金額1は{$kingaku1}円" ."<br>". PHP_EOL;
echo "金額2は{$kingaku2}円" ."<br>". PHP_EOL;
echo "金額3は{$kingaku3}円";
?>
</body>
</html>
