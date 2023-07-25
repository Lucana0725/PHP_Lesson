<?php

  echo '複数枚の子カードが、1枚の親カードとの強弱関係で勝負するゲームを行います。' . PHP_EOL;
  echo '1つ目の番号は1から10の整数、2つ目の番号は1から4の整数で表されます。' . PHP_EOL;
  echo 'また、2つの番号の各組み合わせは1枚だけカードの束に含まれています。(同じカードが2枚以上存在しません)' . PHP_EOL;
  echo '2枚のカードの強弱関係は、次のルールによって決まります。' . PHP_EOL;

  echo '・1つ目の番号が大きいカードのほうが強い("High")' . PHP_EOL;
  echo '・1つ目の番号が同じ場合、2つ目の番号が小さいカードのほうが強い("High")' . PHP_EOL;

  echo '親カードと子カードの情報が与えられるので、それらの強弱関係を調べるプログラムを作成してください。' . PHP_EOL;




  // 与えられるデータ

  // 入力値1

  // 親カード
  $parentCards = array('5 1');
  // プレイ回数
  $nthPlay = 2;
  // 子カード
  $childrenCards = array('7 2', '1 4');
  

  
  // // 入力値2

  // // 親カード
  // $parentCards = array('7 3');
  // // プレイ回数
  // $nthPlay = 4;
  // // 子カード
  // $childrenCards = array('7 1', '7 4', '5 3', '10 1');

  // print_r($parentCards);
  // print_r($childrenCards);


?>