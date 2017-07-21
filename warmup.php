<?php
$testArray = [2, 1, -5, "bob"];
$result = 0;
// create a variable to store the value of 0
// foreach through each element in the array
foreach($testArray as $value) {
  // Inside loop, if the element is_numeric...
  if(is_numeric($value)) {
    // have another if block to check to convert negative numbers to positive
    if($value < 0) {
      $value = abs($value);
    }
    // have another if/else that if the result is odd add it to the result
    if($value % 2 != 0) {
      $result += $value;
      // else, multiply the number to the result
    } else {
      $result *= $value;
    }
  }
  // end of loop
}

echo $result . PHP_EOL;
// echo the result

 ?>
