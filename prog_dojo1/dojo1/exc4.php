<?php
// 初期記述
$menus = array(
  array("name" => "カレー", "price" => "900"),
  array("name" => "パスタ", "price" => "1200"),
  array("name" => "コーヒー", "price" => "600"),
);
// ここまで

// $namesを使って**は++円です と一件ずつ改行して順番どおりに表示せよ

foreach ($menus as $menu) {
  // echo "{$menu['name']}は{$menu['price']}円です" . PHP_EOL;

  // または
  echo $menu['name'] . "は" . $menu['price'] . "円です" . PHP_EOL;
}


?>