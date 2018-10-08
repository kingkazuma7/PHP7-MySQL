<?php
$data = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中で改行したり、
変数を使った文章が作れますね。
更新日：$data
EOD;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SplFileObjectでファイルに保存</title>
  <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
  <div>
  <?php
    $filename = "mytext.txt";
    try {
      // ファイルオブジェクトを作る（wb新規書き出し。ファイルがなければ作る）
      $fileObj = new SplFileObject($filename, "wb");
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました。</span><br>';
      echo $e->getMessage();
      exit();
    }
    // ファイルに書き込む
    $written = $fileObj->fwrite($writedata);
    if ($written===FALSE){
      echo '<span class="error">ファイルに保存できませんでした。</span>';
    } else {
      echo "SpFileObjectのfwriteを使って、<br>{$filename}に
      {$written}バイトを書き出しました。","<hr>";
      echo '<a href="read_file.php">ファイルを読む</a>';
    }
  ?>
  </div>
</body>
</html>
