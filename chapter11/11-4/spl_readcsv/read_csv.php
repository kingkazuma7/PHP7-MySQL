<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SplFileObjectでCSVファイルを読み込む</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>
<body>
  <div>
    <?php
    $filename = "mydata.csv";
    try {
      $fileObj = new SplFileObject($filename, "rb");
    } catch (Exception $e) {
    '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
    }
    // csvファイルを読み込む
    $fileObj->setFlags(
      SplFileObject::READ_CSV
      | SplFileObject::READ_AHEAD
      | SplFileObject::SKIP_EMPTY
      | SplFileObject::DROP_NEW_LINE
    );
    // テーブルのタイトル行
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>", "ID", "</th>";
    echo "<th>", "商品名", "</th>";
    echo "<th>", "価格", "</th>";
    echo "</thead></tr>";
    // 値を取り出して行に表示する
    echo "<tbody>";
    foreach ($fileObj as $row) {
      list($id, $name, $price) = $row;
      if ($price == ""){
        continue;
      }
      echo "<tr>";
      echo "<td>", es($id), "</td>";
      echo "<td>", es($name), "</td>";
      echo "<td>", es(number_format($price)), "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
  </div>
</body>
</html>
