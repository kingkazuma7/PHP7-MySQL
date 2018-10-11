<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>1行メモの入力</title>
  <link rel="stylesheet" href="../../css/style.css">
  <style>
    .memofield { width:300px; }
  </style>
</head>
<body>
 <div>
  <form method="POST" action="write_memofile.php">
    <ul>
      <li><label>memo: <input name="memo" class="memofield" placeholder="メモを書く"></label></li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>
 </div> 
</body>
</html>
