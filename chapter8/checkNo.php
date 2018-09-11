<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GETリクエスト処理</title>
</head>
<body>
  <?php
  // GETリクエストのパラメータの値を受け取る
  $no = $_GET["no"];
  // 番号リスト
  $nolist = [3,5,7,8,9];
  // 検索する
  if (in_array($no, $nolist)) {
    echo "${no}はありました。";
  } else {
    echo "${no}はありませんでした。";
  }
  ?>
</body>
</html>
