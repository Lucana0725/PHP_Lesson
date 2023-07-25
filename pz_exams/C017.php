<?php

  echo '複数枚の子カードが、1枚の親カードとの強弱関係で勝負するゲームを行います。' . PHP_EOL;
  echo '1つ目の番号は1から10の整数、2つ目の番号は1から4の整数で表されます。' . PHP_EOL;
  echo 'また、2つの番号の各組み合わせは1枚だけカードの束に含まれています。(同じカードが2枚以上存在しません)' . PHP_EOL;
  echo '2枚のカードの強弱関係は、次のルールによって決まります。' . PHP_EOL;

  echo '・1つ目の番号が大きいカードのほうが強い("High")' . PHP_EOL;
  echo '・1つ目の番号が同じ場合、2つ目の番号が小さいカードのほうが強い("High")' . PHP_EOL;

  echo '親カードと子カードの情報が与えられるので、それらの強弱関係を調べるプログラムを作成してください。' . PHP_EOL;




  // 与えられるデータ

  // // 入力値1

  // // 親カード
  // $parentCards = '5 1';
  // // プレイ回数
  // $nthPlay = 2;
  // // 子カード
  // $childrenCards = array('7 2', '1 4');
  


  // // 入力値2

  // 親カード
  $parentCards = '7 3';
  // プレイ回数
  $nthPlay = 4;
  // 子カード
  $childrenCards = array('7 1', '7 4', '5 3', '10 1');





  // 実装
  $parent = explode(" ", $parentCards);  // 半角スペース区切りで渡ってくる親カードを分割させて配列へ。
  $childrenInputs;  // foreach文内で利用する、explodeを用いて子カードを分割したものを入れる変数を定義
  $children = [];  // foreach文内でexplodeを用いて分割した$childrenInputsを格納するための空配列
  foreach($childrenCards as $childCards) {
    $childrenInputs = explode(" ", $childCards);
    $children[] = $childrenInputs;
  }
  // print_r($parent);
  // print_r($children);

  echo PHP_EOL;
  echo '実行結果：' . PHP_EOL;

  for($i = 0; $i < $nthPlay; $i++) {
    if($parent[0] == $children[$i][0]) {
      if($parent[1] < $children[$i][1]) {
        echo 'High' . PHP_EOL;
      } else {
        echo 'Low' . PHP_EOL;
      }
    } elseif($parent[0] > $children[$i][0]) {
      echo 'High' . PHP_EOL;
    } else {
      echo 'Low' . PHP_EOL;
    }
  }
?>