<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>strcasecmp()を使って比較する</title>
</head>
<body>
  <pre>
  <?php
  $id1 = "AB12R";
  $id2 = "ab12r";
  $result = strcasecmp($id1, $id2);
  echo "{$id1}と{$id2}を比較した結果、";
  if ($result == 0){
    echo "一致しました。";
  } else {
    echo "一致しません。";
  }
  ?>
  </pre>
</body>
</html>
