<?php
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
$teamB = ["江藤幸代", "小野幸子"];
function teamList($teamname, $nameList){
  echo "{$teamname}", "\n";
  echo "<ol>", "\n";
  for ($i=0; $i<count($nameList); $i++){
    echo "<li>", $nameList[$i], "</li>\n";
  }
  echo "</ol>\n";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>名前のリスト</title>
</head>
<body>
<?php
teamList('Aチーム', $teamA);
teamList('Bチーム', $teamB);
?>
</body>
</html>
