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
    $numOfPlayers = intval(trim(fgets($input)));
    fclose($input);

    // プレイ人数に負の数や10以上の値、小数が入った場合、処理を中断する
    if(!ctype_digit($numOfPlayers) || $numOfPlayers < 2 || $numOfPlayers > 9) {
      echo '不正な値が入力されました。処理を中止します。';
      exit;
    }

    echo '次に各プレイヤーの所持数を入力してください。' . PHP_EOL;
    $input = fopen('php://stdin', 'r');
    $playerHas = intval(trim(fgets($input)));
    fclose($input);

    echo '次に、プレイ(パス回し)回数を入力してください。(テスト用に3を入力)' . PHP_EOL;
    $input = fopen('php://stdin', 'r');
    $timesOfPlay = intval(trim(fgets($input)));
    fclose($input);

    echo '次に、「どのプレイヤーが」「どのプレイヤーに」「何個パスするか」を半角スペース区切りで入力してください。' . PHP_EOL;
    $input = fopen('php://stdin', 'r');
    $playing = trim(fgets($input));
    fclose($input);



    // 入力確認用
    echo PHP_EOL;
    echo '入力内容';
    echo "プレイ人数：{$numOfPlayers}人" . PHP_EOL;
    echo "初期所有数：{$playerHas}個" . PHP_EOL;
    echo "プレイ内容:{$playing}";
  }


  function executions() {
    
  }

  echo '両隣入りのどちらかの人にボールをパスするパス回しゲームをプレイし、最終的に各々が所有しているボールの個数を算出するプログラムです。' . PHP_EOL;
  rules();
  userInputs();


?>