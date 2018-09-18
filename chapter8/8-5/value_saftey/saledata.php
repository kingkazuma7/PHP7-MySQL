<?php
  // 販売データ
  $couponList = ["nf23qw"=>0.75, "ha45as"=>0.8, "hf56zx"=>8.5];
  $priceList = ["ax101"=>2300, "ax102"=>2900];

  // クーポンコードで割引率を調べて返す
  function getCouponRate($code) {
    global $couponList;
    if ($isCouponCode) {
      return $couponList[$code];
    } else {
      return NULL;
    }
  }

  // 商品IDで価格を調べて返す
  function getPrice($id) {
    $isGoodsID = array_key_exists($id, $priceList);
    if ($isGoodsID) {
      return $priceList[$id];
    } else {
      return NULL;
    }
  }
?>
