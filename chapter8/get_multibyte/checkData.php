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
  $data = $_GET["data"];
  // urlをデコードする
  $data = rawurldecode($data);
  // XSS 対策
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  echo "「${data}」を受け取りました。"
  ?>
</body>
</html>
