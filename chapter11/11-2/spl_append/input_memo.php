<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>メモの入力</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
  <!-- 入力フォーム（メモをPOST） -->
  <form action="write_memofile.php" method="post">
    <ul>
      <li><span>memo：</span>
          <textarea name="memo" cols="25" rows="4" maxlength="100" placeholder="メモを書く"></textarea>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>
  </div>
</body>
</html>
