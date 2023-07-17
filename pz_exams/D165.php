<?php

  // $nums = array(1, 1, 4, 5, 1, 4);
  $nums = array(8, 1, 0);
  print_r(array_count_values($nums));

  $maxCount = max(array_count_values($nums));
  if($maxCount == 1) {
    echo '重複なし';
  } else {
    echo '重複あり';
  }

?>