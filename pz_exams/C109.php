<?php
$userIDs = ['pays1', 'kirishima813', 'pizza99', 'sushi100', 'beef1001'];

echo 'ユーザーIDが「ユーザーネーム + 通し番号」となるSNSがあります。' . PHP_EOL;
echo 'ユーザーIDが与えられますので、ユーザーIDを通し番号の若い順に並べてください。' . PHP_EOL;

echo 'ユーザーID：' . PHP_EOL;
foreach($userIDs as $userID) {
  echo $userID . PHP_EOL;
}


?>