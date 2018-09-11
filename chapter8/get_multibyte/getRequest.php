<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>URLエンコード（GET）</title>
</head>
<body>
  <?php
  // URLエンコードする
  $data = "東京";
  $data = rawurlencode($data);

  // クエリ文字列のリンクを作る
  $url = "checkData.php";
  echo "<a href=${url}?data=${data}>", "送信する","</a>";
  ?>
</body>
</html>
