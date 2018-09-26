<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>テキストエリア</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <?php
  require_once("../../lib/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // エラーメッセージを出して、以下のコードをすべてキャンセルする
    exit($err);
  }
  ?>

  <?php
  if (isset($_POST["note"])){
    $note = $_POST["note"];
    $note = strip_tags($note);
    $note = mb_substr($note, 0, 150);
    $note = es($note);
  } else {
    $note = "";
  }
  ?>

  <!-- 入力フォーム -->
  <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="post">
    <ul>
      <li><span>NOTE：</span>
        <textarea name="note" cols="25" rows="4" maxlength="100" placeholder="コメントをどうぞ"><?php echo $note ?></textarea>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>

  <?php
  $length = mb_strlen($note);
  if ($length>0) {
    echo "<hr>";
    $note_br = nl2br($note, false);
    echo $note_br;
  }
  ?>
</body>
</html>
