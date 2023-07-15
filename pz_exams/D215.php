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


  echo "Enter your password\n";
  $handle = fopen("php://stdin", "r");
  $password = fgets($handle);
  fclose($handle);

  echo "Entered password: " . $password;

?>