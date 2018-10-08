<?php
require_once("../../lib/util.php")
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SpFileObjectでファイルを読み込む</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
  <?php
  $filename = "mytext.txt";
  try {
    $fileObj = new SplFileObject($filename, "rb");
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span>';
    echo $e->getMessage();
    exit();
  }
  // ストリングを読み込む
  $readdata = $fileObj->fread($fileObj->getSize());
  if (!($readdata === FALSE)) {
    $readdata = es($readdata);
    $readdata_br = nl2br($readdata, false);
    echo "{$filename}を読み込みました。","<br>";
    echo $readdata_br, "<hr>";
    echo '<a href="write_file.php">ファイルに書き込む</a>';
  } else {
    echo '<span class="error">ファイルを読み込めませんでした。</span>';
  }
  ?>
  </div>
</body>
</html>
