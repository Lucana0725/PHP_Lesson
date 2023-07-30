<?php

  echo '1から100までの数字を6つ選んで充てる宝くじがあります。' . PHP_EOL;
  echo '抽選では6つの当選番号が発表され、購入したクジの数字と一致していた数字の数に応じて賞金が当たります。' . PHP_EOL;
  echo 'あなたは先日N枚のくじを購入しました。' . PHP_EOL;
  echo '当選番号と、あなたが購入したくじの番号が与えられますので、当選番号と一致した数字の数について調べるプログラムを書いてください。' . PHP_EOL;
  // echo '例' . PHP_EOL;
  // echo '当選番号：1 2 3 4 5 6' . PHP_EOL;
  // echo 'あなたの所持'


  // // 与えられるデータ 1
  // // 当選番号
  // $selectedNumbers = array('1 2 3 4 5 6');
  // // 購入枚数
  // $yourHave = '3';
  // // 購入したくじの番号
  // $yourLotos = array(
  //   ['1 5 4 2 3 6'],
  //   ['9 6 2 7 1 5'],
  //   ['32 9 87 33 41 60']
  // );

   // 与えられるデータ2
  // 当選番号
  $selectedNumbers = array('72 2 90 84 57 85');
  // 購入枚数
  $yourHave = '3';
  // 購入したくじの番号
  $yourLotos = array(
    ['36 70 1 72 54 82'],
    ['36 2 40 12 3 58'],
    ['25 11 90 57 85 99'],
    ['60', '61', '62', '63', '64', '65']

  );

  // print_r($yourNumbers);



  // 処理
  $rewardNumbers = explode(' ', $selectedNumbers[0]);  // 当選番号を1つずつ分割
  // print_r($rewardNumbers);

  $yourNumbers = [];  // 購入したくじを1つずつ分割、二次元配列に。
  foreach($yourLotos as $yourLoto) {
    $yourSelected = explode(' ', $yourLoto[0]);
    $yourNumbers[] = $yourSelected;
  }
  // print_r($yourNumbers);
  
  // 各くじの当選数をカウントする処理
  $matchCounts = [];  // 当選数を各くじ毎に管理する用
  foreach($yourNumbers as $yourNumber) {
    $existCount = 0;  // 当選数のカウント(0で初期化)
    foreach($yourNumber as $theElement) {
      if(in_array($theElement, $rewardNumbers)) {
        $existCount += 1;
      }
    }
    $matchCounts[] = $existCount;
  }

  // print_r($matchCounts);
  foreach($matchCounts as $key => $value) {
    $displayKey = $key + 1;
    if($value != 0) {
      // echo "{$key}枚目のくじには{$value}個の当選番号が存在します" . PHP_EOL;
      // echo ($key+1) . '枚目のくじには' . $value . '個の当選番号が存在します' . PHP_EOL;
      echo "{$displayKey}枚目のくじには{$value}個の当選番号が存在します" . PHP_EOL;
    } else {
      echo "{$displayKey}枚目のくじには当選番号はありません" . PHP_EOL;
    }
  }


?>