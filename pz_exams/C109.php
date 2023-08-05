<?php
$userIDs = ['phase1', 'kirishima813', 'pizza99', 'sushi100', 'beef1001'];

echo 'ユーザーIDが「ユーザーネーム + 通し番号」となるSNSがあります。' . PHP_EOL;
echo 'ユーザーIDが与えられますので、ユーザーIDを通し番号の若い順に並べてください。' . PHP_EOL;

echo 'ユーザーID：' . PHP_EOL;
foreach($userIDs as $userID) {
  echo $userID . PHP_EOL;
}


// ユーザーIDの数字だけ抜き取る
$userNumbers = [];
foreach($userIDs as $userID) {
  $result = preg_replace('/[^0-9]/', '', $userID);
  $userNumbers[] = $result;
}
// print_r($userNumbers);


// ユーザーIDから数字以外を抜き取る
$userNames = [];
foreach($userIDs as $userID) {
  $result = preg_replace('/[^a-zA-Z]/', '', $userID);
  $userNames[] = $result;
}
print_r($userNames);


?>