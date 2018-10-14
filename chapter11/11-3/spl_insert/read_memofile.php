<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>メモを読み込む</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    $filename = "memo.txt";
    try {
      $fileObj = new SplFileObject($filename, "rb");
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました。</span>';
      echo $e->getMessage();
      exit();
    }

    // データを読み込む(先頭の5行)
    $fileObj->flock(LOCK_SH);
    $data = new LimitIterator($fileObj, 0, 5);
    foreach ($data as $key => $value) {
      echo sprintf("%02d:　%s\n", $key+1, es($value)),
      "<br>";
    }
    $fileObj->flock(LOCK_UN);

    echo "<hr>", '<a href="input_memo.php">メモ入力ページへ</a>';
    ?>
  </div>
</body>
</html>
