<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ファイルを読み込む</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
    $filename = "mytext.txt"; 
    $result = file_exists($filename);
    if ($result) {
      $readdata = file_get_contents($filename);
      $readdata = es($readdata);
      $readdata_br = nl2br($readdata, false);
      echo "{$filename}を読み込みました。", "<br>";
      echo $readdata_br, "<hr>";
      echo '<a href="put_contents.php">ファイルに書き込む</a>';
    } else {
      echo '<span class="error">ファイルを読み込めませんでした。</span>';
    }
  ?>
</body>
</html>
