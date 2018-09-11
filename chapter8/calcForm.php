<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>フォーム入力処理の基本（POST）</title>
</head>
<body>
  <form action="calc.php" method="post">
    <ul>
      <li><label>単価：<input type="number" name="tanka"></label></li>
      <li><label>個数：<input type="number" name="kosu"></label></li>
    </ul>
    <p><input type="submit" value="計算する"></p>
  </form>
</body>
</html>
