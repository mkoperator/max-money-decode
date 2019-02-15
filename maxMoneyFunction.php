<?ph
function maxMoney ($n, $k) {
  //iterate through possible skips
  $maxTotal = 0;
  for ($skip = 0; $skip <= $k; $skip++) {
    $skipTotal = 0;
    $lastSkip = $skip;

    for ($student = 1; $student <= $n; $student++) {
      $nextStudent = $student + 1;

      if ($skip !== $student) {
        if ($skipTotal + $student != $k) {
          $skipTotal += $student;
        } else {
          //if skipping does not prevent k, continue
          continue 2;
        }
      }

      //if skipping prevents k, move on.
      if ($k < $skipTotal) {
          $maxTotal = $skipTotal;
          break 2;
      }
    }
  }
  for ($i = $nextStudent; $i <= $n; $i++) {
    $maxTotal += $i;
  }
  return ($maxTotal % 1000000007);
}
