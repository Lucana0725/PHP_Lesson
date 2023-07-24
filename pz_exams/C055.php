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

  $collects = [];  // 入力値の文字列が含まれている文字列を追加する空配列

  // 用意されたデータに対して、$keywordが含まれているかを調べるためのループ処理
  foreach($data as $datum) {
    $result = mb_strpos($datum, $keyword);  // mb_strpos()を使って、$dataの各要素に$keywordが含まれているかの結果を保持

    // $dataの各要素に$keywordが含まれていれば、$collectsへ追加
    if($result !== false) {
      $collects[] = $datum;
    }
  }

  

?>