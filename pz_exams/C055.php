<?php

// 用意されているデータ
  $data = array('paizaonlinehackathon');
  // $data = array('pizza', 'paiza', 'aizu', 'ai', 'sai');
  // $data = array('safe', 'normal', 'test');

  echo '入力されたキーワードにヒットするデータを出力します。' . PHP_EOL;
  echo '検索したいキーワードを入力してください。' . PHP_EOL;

  $input = fopen('php://stdin', 'r');
  $keyword = trim(fgets($input));
  fclose($input);


?>