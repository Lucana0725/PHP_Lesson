<?php
// 初期記述
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値：' . $price . PHP_EOL;
echo '変数$taxRateの値：' . $taxRate . PHP_EOL;
echo '----------' . PHP_EOL;
// ここまで

// $priceと$taxRateを使って"税込価格は**円です"と出力せよ
$taxInPrice = $price + $price * $taxRate;
echo "税込価格は{$taxInPrice}円です";
?>