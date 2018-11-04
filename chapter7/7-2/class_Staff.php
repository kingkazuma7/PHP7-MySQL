<?php
class Staff {
  public $name;
  public $age;

  public function hello(){
    echo "こんにちは！", "\n";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クラスを定義する</title>
</head>
<body>
<pre>
<?php
$hana = new Staff();
$taro = new Staff();
// プロパティに値を設定
$hana->name = "花";
$hana->age = 21;
$taro->name = "太郎";
$taro->age = 35;

print_r($hana);
print_r($taro);

$hana->hello();
$taro->hello();
?>
</pre>
</body>
</html>
