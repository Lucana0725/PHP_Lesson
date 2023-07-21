<?php

  function rules() {
    echo PHP_EOL;
    echo '~ルール説明~' . PHP_EOL;
    echo 'プレイヤーは最初にいくらかボールを所持しており、パスを回すときは回す相手と回す個数を宣言します。' . PHP_EOL;
    echo 'その際、宣言数がプレイヤー自身が所持している個数以下の場合は宣言数を渡せますが、宣言数を上回る場合は所持数を全て渡します。' . PHP_EOL;
    echo '各プレイヤーは持てるボールの個数に上限はありません。' . PHP_EOL;
  }

  function userInputs() {
    echo PHP_EOL;
    echo 'まずはプレイ人数を入力してください。(テスト用に3を入力)' . PHP_EOL;
    $input = fopen('php://stdin', 'r');
    $numOfPlayers = trim(fgets($input));
    fclose($input);

    // プレイ人数に負の数や10以上の値、小数が入った場合、処理を中断する
    if(!filter_var($numOfPlayers, FILTER_VALIDATE_INT) || $numOfPlayers < 3 || $numOfPlayers > 9) {  // filter_var()を使って$numOfPlayerが整数かどうかを判定、これで小数を弾く
      echo '不正な値が入力されました。処理を中止します。';
      exit;
    }
    // echo gettype($numOfPlayers);  // $numOfPlayersの型を検出


    // $numOfPlayers分だけ所持数を入力させる
    echo '次に各プレイヤーの所持数を入力してください。' . PHP_EOL;
    $playerHasList = array();  // 各プレイヤーの初期所有数を保持するためのから配列
    for($i = 0; $i < $numOfPlayers; $i++) {
      echo ($i + 1) . "人目の所持数を入力してください：" . PHP_EOL;
      $input = fopen('php://stdin', 'r');
      // $playerHas = intval(trim(fgets($input)));  // intval()があると小数が渡ってきても整数値型にキャストしてしまうのでダメ。
      $playerHas = trim(fgets($input));
      fclose($input);

      // 所持数がマイナス値や小数になった場合処理を中断させる
      if(!filter_var($playerHas, FILTER_VALIDATE_INT) || $playerHas < 0) {
        echo '不正な値が入力されました。処理を中止します。';
        exit;
      }

      $playerHasList[] = $playerHas;  // 各プレイヤーの初期所持数を追加
    }


    echo '次に、プレイ(パス回し)回数を入力してください。(テスト用に3を入力)' . PHP_EOL;
    $input = fopen('php://stdin', 'r');
    // $timesOfPlay = intval(trim(fgets($input)));  // 入力値が正の整数かを判定するためintval()はダメ
    $timesOfPlay = trim(fgets($input));
    fclose($input);

    // 入力値が0未満の場合弾く処理
    if(!filter_var($timesOfPlay, FILTER_VALIDATE_INT) || $timesOfPlay < 1) {
      echo '不正な値が入力されました。処理を中止します。' . PHP_EOL;
      exit;
    }

    echo '次に、「どのプレイヤーが」「どのプレイヤーに」「何個パスするか」を半角スペース区切りで入力してください。' . PHP_EOL;
    for($i = 0; $i < $timesOfPlay; $i++) {
      echo ($i + 1) . "回目のパス" . PHP_EOL;
      $input = fopen('php://stdin', 'r');
      $playing = trim(fgets($input));
      fclose($input);
      
      // 半角スペース区切りになっていない場合に処理を中断したいという処理
      if(!preg_match('/^\d+\s+\d+\s+\d+$/', $playing)) {
        echo '3つの要件を半角スペース区切りで渡されていません。処理は中止されます。';
        exit;
      }
    }




    // 入力確認用(丁寧な表記)
    // echo PHP_EOL;
    // echo '入力内容：' . PHP_EOL;
    // // echo "プレイ人数：{$numOfPlayers}人" . PHP_EOL;
    // // echo "初期所有数：{$playerHas}個" . PHP_EOL;
    // for($i = 0; $i < $numOfPlayers; $i++) {
    //   // echo ($i + 1) . "番目のプレイヤーの所持数：{$playerHasList[$i]}個" . PHP_EOL;
    // }
    // echo "プレイ内容:{$playing}";

    // 入力確認用(より問題に近い表示)
    echo PHP_EOL;
    echo '#デバッグ用入力確認表示#' . PHP_EOL;
    echo "{$numOfPlayers}" . PHP_EOL;
    for($i = 0; $i < $numOfPlayers; $i++) {
      echo "{$playerHasList[$i]}" . PHP_EOL;
    }
    echo "プレイ内容:{$playing}";
  }


  function executions() {
    
  }

  echo '両隣りのどちらかの人にボールをパスするパス回しゲームをプレイし、最終的に各々が所有しているボールの個数を算出するプログラムです。' . PHP_EOL;
  rules();
  userInputs();




  // メソッドなど試し
  // $input = '-123';
  // if(ctype_digit($input)) {
  //   echo "{$input}は整数です" . PHP_EOL;
  // } else {
  //   echo "{$input}は整数ではありません" . PHP_EOL;
  // }

  // $input = '-123';
  // if(filter_var($input, FILTER_VALIDATE_INT)) {
  //   echo "{$input}は整数です" . PHP_EOL;
  // } else {
  //   echo "{$input}は整数ではありません" . PHP_EOL;
  // }

  // echo 'type your number' . PHP_EOL;
  // $input = fopen('php://stdin', 'r');
  // $num = trim(fgets($input));
  // fclose($input);

  // if(filter_var($num, FILTER_VALIDATE_INT)) {
  //   echo "{$num}は" . gettype($num) . "型です" . PHP_EOL;
  //   echo "{$num} is INT";
  // } else {
  //   echo gettype($num) . PHP_EOL;
  //   echo "{$num} is not INT";
  // }

  // $num = '1, 2, 3';
  // if(preg_match('/^\d+\s+\d+\s+\d$/', $num)) {
  //   echo '半角スペース区切りで3つの数字が渡されています';
  // } else {
  //   echo 'パターンにマッチしません';
  // }

?>