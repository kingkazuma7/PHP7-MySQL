<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET リクエスト処理</title>
</head>
<body>
  <?php
    $no = $_GET["no"];
    $nolist = [3, 5, 7, 8, 9];
    // 配列nolistにcheckNoForm.phpから受け取った$noの値が存在するか
    if (in_array($no, $nolist)) {
      echo "{$no}はありました！";
    } else {
      echo "{$no}はありませんでした！";
    }
  ?>
</body>
</html>
