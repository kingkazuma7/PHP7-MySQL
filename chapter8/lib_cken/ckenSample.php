<?php
require_once("./util.php");
$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');
$encoding = mb_internal_encoding();
if (cken([$sjis_string])) {
  echo '配列の値は、' , $encoding, 'です。';
} else {
  echo '配列の値は、',$encoding, 'ではありません。';
}
