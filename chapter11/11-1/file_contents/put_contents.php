<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中で改行したり、
変数を使った文章が作れますね。
更新日：$date
EOD;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ファイルに保存</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
  <?php
  $filename = "mytext.txt";
  $result = touch($filename);
  if ($result) {
    file_put_contents($filename, $writedata, LOCK_EX);
    echo "{$filename}にデータを書き出しました。", "<hr>";
    echo '<a href="get_contents.php">ファイルを読み込む</a>';
  } else {
    echo '<span class="error">ファイルに保存できませんでした。</span>';
  }
  ?>
  </div>
</body>
</html>
