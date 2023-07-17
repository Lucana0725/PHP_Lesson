<?php

  // $nums = array(1, 1, 4, 5, 1, 4);
  // $nums = array(8, 1, 0);
  // print_r(array_count_values($nums));

  // $maxCount = max(array_count_values($nums));
  // if($maxCount == 1) {
  //   echo '重複なし';
  // } else {
  //   echo '重複あり';
  // }



  // ユーザーに4桁の数字を入力させ、重複の無いパスワードを作成させるプログラム

  echo '4桁の数字から成るパスワードを入力してください。重複が無いようご注意ください' . PHP_EOL;
  
  // ユーザーに入力させる
  $input = fopen("php://stdin", "r");
  $password = trim(fgets($input));
  fclose($input);

  // 入力された数値を一桁区切りに分割
  $nums = array();
  while($password > 0) {
    $nums[] = $password % 10;
    $password = intval($password / 10);
  }
  
  // 重複があるかどうかの検査
  $maxCount = max(array_count_values($nums));  // 重複のカウント
  if($maxCount == 1) {
    echo '重複が無い安全なパスワードです。';
  } else {
    echo '重複があるのでNGです。';
  }


?>