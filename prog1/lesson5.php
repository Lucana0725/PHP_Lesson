<?php
// 初期記述
$menus = array(
  array("name" => "カレー", "price" => "900"),
  array("name" => "パスタ", "price" => "1200"),
  array("name" => "コーヒー", "price" => "600"),
);
// ここまで

// 問題：全てのメニューの合計金額を算出せよ


$totalPrice = 0;
foreach ($menus as $menu) {
  echo "{$menu['name']}は{$menu['price']}円です" . PHP_EOL;
  $totalPrice += $menu['price'];
}

echo "合計金額は{$totalPrice}円です" . PHP_EOL;


?>