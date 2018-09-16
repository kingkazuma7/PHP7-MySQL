<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>フォーム入力</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <form action="warikan.php" method="post">
    <ul>
      <li><label>合計金額：<input type="number" name="goukei"></label></li>
      <li><label>人数：<input type="number" name="ninzu"></label></li>
      <li><input type="submit" value="割り勘する"></li>
    </ul>
  </form>
</body>
</html>
