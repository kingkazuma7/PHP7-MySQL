<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>マッチした値を置換する</title>
</head>
<body>
<pre>
<?php
function numbermask($subject){
  $pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\d{2}(\d{2})$/";
  $replacement = "**** **** **** **$1";
  $result = preg_replace($pattern, $replacement, $subject);
  if (is_null($result)) {
    return "エラー：" . preg_last_error();
  } else if ($result == $subject) {
    return "番号エラー";
  } else {
    return $result;
  }
}

$number1 = "1234 5678 9012 3456";
$number2 = "6543210987654321";
$num1 = numbermask($number1);
$num2 = numbermask($number2);
echo "{$number1}は次のようになります。\n";
echo $num1, "\n";
echo "{$number2}は次のようになります。\n";
echo $num2, "\n";
?>
</pre>
</body>
</html>
