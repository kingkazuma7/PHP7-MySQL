<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
  <?php
    $data = "東京";
    $data = rawurlencode($data);
    $url = "checkData.php";
    echo "<a href={$url}?data={$data}>"  ,"送信する", "</a>";
  ?>
</body>
</html>
