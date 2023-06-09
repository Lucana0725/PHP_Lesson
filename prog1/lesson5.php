<?php
// 初期記述
$menus = array(
  array("name" => "カレー", "price" => "900"),
  array("name" => "パスタ", "price" => "1200"),
  array("name" => "コーヒー", "price" => "600"),
);
// ここまで

// 問題：全てのメニューの合計金額を算出せよ
// 問題：メニューの中で最高金額の商品を「**が最高価格で、++円です」と表示せよ


$totalPrice = 0;  // トータル金額を保持
$maxPrice = 0;  // 最高価格を保持
$maxPriceMenu;  // 最高価格の商品を保持(ここでは初期化はせず定義するだけ)
foreach ($menus as $menu) {
  if ($menu['price'] > $maxPrice) {
    $maxPrice = $menu['price'];
    $maxPriceMenu = $menu['name'];
  }
  echo "{$menu['name']}は{$menu['price']}円です" . PHP_EOL;
  $totalPrice += $menu['price'];
}

echo "合計金額は{$totalPrice}円です" . PHP_EOL;
echo "{$maxPriceMenu}が最高価格で{$maxPrice}円です" . PHP_EOL;

?>