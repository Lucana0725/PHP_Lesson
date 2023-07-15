<?php

  // 入力値
  $input = 114514;

  // 一桁区切りに分解
  $nums = array();

  while($input > 0) {
    $nums[] = $input % 10;
    $input = intval($input / 10);
  }

  print_r($nums);
  $reverseNums = array_reverse($nums);  // 配列$numsを逆順(元数値順)に
  print_r($reverseNums);

  // // 桁数を出力
  // print_r(strlen($input));

  // // 桁数を出力 その2
  // $nums = array();

  // while ($input > 0) {
  //   $nums[] = $input % 10;
  //   $input = intval($input / 10);
  // }

  // echo count($nums);

?>