<?php

// くじの当選番号
$rewardNumbers = array('72 2 90 84 57 85');





// プログラムの説明文
function explanes() {
  echo '1から100までの数字を6つ選んで当てる宝くじがあります。' . PHP_EOL;
  echo '抽選では6つの当選番号が発表され、購入したクジの数字と一致していた数字の数に応じて賞金が当たります。' . PHP_EOL;
  echo '当選番号と一致した数字の数について調べるプログラムが存在しますので、購入枚数と選んだ数字を半角スペース区切りで6つ入力してください。' . PHP_EOL;
}





// ユーザー入力関連 + 処理実行部分
function userInputsAndExecutions() {
  // 購入数の入力フェーズ
  echo 'まずは購入数を入力してください。(1-5)' . PHP_EOL;
  $input = fopen('php://stdin', 'r');
  $amountOfBought = trim(fgets($input));
  fclose($input);

  // 指定外の購入数が入力された場合は処理を中止する処理
  if(!filter_var($amountOfBought, FILTER_VALIDATE_INT) || $amountOfBought < 1 || $amountOfBought > 5) {
    echo '不正な値が入力されました。処理を中止します。' . PHP_EOL;
    exit;
  }

  echo $amountOfBought . PHP_EOL;  // 入力確認用出力





  // ユーザーによるくじ番号選択
  echo '次に、一枚あたり6つ、1-100で好きな数字を半角スペース区切りで入力してください。1枚あたりで数字の重複選択はできません。' . PHP_EOL;
  $input = fopen('php://stdin', 'r');
  $userSelect = trim(fgets($input));
  fclose($input);

  // 指定形式(半角スペース区切り)外の入力の場合処理を中止する
  if(!preg_match('/^(?:(?:[1-9][0-9]?|100)(?:\s|$)){6}$/', $userSelect)) {
    echo '不正な値が入力されました。処理を中断します。' . PHP_EOL;
    exit;
  } else {
    // 数字の重複があれば処理を中止する
    $userSelectNum = explode(" ", $userSelect);
    $uniqueSelect = array_unique($userSelectNum);
    if(count($uniqueSelect) !== 6) {
      echo '重複が発見されました。処理を中断します。' . PHP_EOL;
      exit;
    }
  }

  print_r($uniqueSelect) . PHP_EOL;  // 入力確認用出力





  // 当選番号の検索

}





// 処理実行部
explanes();
userInputsAndExecutions();


?>