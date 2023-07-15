<?php

  $input = 100;
  // $nums = array();

  // while($input > 0) {
  //   $nums[] = $input % 10;
  //   $input = intval($input / 10);
  // }

  // print_r($nums);

  // // 桁数を出力
  // print_r(strlen($input));

  // 桁数を出力 その2
  $nums = array();

  while ($input > 0) {
    $nums[] = $input % 10;
    $input = intval($input / 10);
  }
  
  echo count($nums);

?>