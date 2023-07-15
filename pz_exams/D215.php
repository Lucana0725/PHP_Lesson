<?php

  // $str = readline('パスワードを入力してください');
  // $password = 'guitar';
  // $str = readline("Enter your password.\n");
  // echo $str;
  // echo readline("Enter your password\n");


  // $inputLine = fgets(STDIN);
  // if ($iputLine == $password) {
  //   echo 'Welcome!';
  // } else {
  //   echo 'Invalid password';
  // }

  // // 土台
  // echo "Enter your password" . PHP_EOL;

  // // fopen()を使って'php://stdin'を開いて標準入力を開く。入力値を$handleに格納
  // $handle = fopen("php://stdin", "r");

  // // 標準入力値$handleをfgetsで取得
  // $password = fgets($handle);

  // // ファイルポインタを閉じる
  // fclose($handle);

  // echo "Entered password: " . $password;

  
  
  
  
  // 以下問題
  // 用意されたパスワード
  $password = 'guitar';

  echo "パスワードを入力してください" . PHP_EOL;

  // 入力値の受け付け関連
  $handle = fopen('php://stdin', 'r');
  // $inputLine = fgets($handle);
  $inputLine = trim(fgets($handle));
  fclose($handle);

  echo "入力されたパスワードは{$inputLine}です" . PHP_EOL;
  // パスワードが合っているかどうか判定
  if ($inputLine == $password) {
    // echo $inputLine . PHP_EOL;
    echo "パスワードを認証しました";
  } else {
    // echo $inputLine . PHP_EOL;
    echo "パスワードが違います";
  }


?>