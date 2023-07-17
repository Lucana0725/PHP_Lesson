<?php

  // // 0でない数から始まる数値$input
  // $input = 1234;

  // $nums = array();
  // while($input > 0) {
  //   $nums[] = $input % 10;
  //   $input = intval($input / 10);
  // }

  // print_r($nums);



  // // 0から始まる数値$input2
  // // $input2 = 0;
  // $input2 = "01234";
  // $length = strlen($input2);
  // $nums = array();

  // // echo $length;
  // // for($i = $length - 1; $i >= 0; $i--) {
  // //   $nums[] = $input2[$i];
  // // }
  // for($i = 0; $i < $length; $i++) {
  //   $nums[] = $input2[$i];
  // }
  // print_r($nums);

  
  
  // ユーザーからの入力値を標準入力として使用する場合
  echo '4桁の数字を入力してください' . PHP_EOL;

  // ユーザーからの入力を受け付ける
  $input = fopen("php://stdin", "r");
  $number = (string) trim(fgets($input));  // 入力値を文字列型へキャストする
  fclose($input);

  // strlen()で文字列型へ変換された入力値$numberの長さを取得
  $nums = array();
  $length = strlen($number);
  for($i = 0; $i < $length; $i++) {
    $nums[] = $number[$i];
  }
  print_r($nums);

?>