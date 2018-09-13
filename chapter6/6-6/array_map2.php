<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>複数の配列を並列的に処理する</title>
</head>
<body>
  <?php
    function listUp($value1, $value2) {
      echo "<li>" ,$value1, " -- " ,$value2, "</li>","\n";
    }

    // 通過地点
    $point = ["10km", "20km", "30km", "40km", "Goal"];
    // スプリット
    $split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
    echo "<ul>", "\n";
    array_map("listUp", $point, $split);
    echo "</ul>";
  ?>
</body>
</html>
