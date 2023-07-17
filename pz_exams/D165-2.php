<?php

// 0でない数から始まる数値$input
  // $input = 1234;

  // $nums = array();
  // while($input > 0) {
  //   $nums[] = $input % 10;
  //   $input = intval($input / 10);
  // }

  // print_r($nums);



  // 0から始まる数値$input2
  // $input2 = 0;
  $input2 = "01234";
  $length = strlen($input2);
  $nums = array();

  // echo $length;
  // for($i = $length - 1; $i >= 0; $i--) {
  //   $nums[] = $input2[$i];
  // }
  for($i = 0; $i < $length; $i++) {
    $nums[] = $input2[$i];
  }
  print_r($nums);

?>