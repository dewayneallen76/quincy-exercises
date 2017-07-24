<?php


function upperCaseName($firstName, $lastName) {
  if(is_string($firstName) && is_string($lastName)) {
    return "Hello " . ucfirst($firstName) . " " . ucfirst($lastName) . PHP_EOL;
  } else {
    return "Sorry you must enter a valid name" .PHP_EOL;
  }
}

echo upperCaseName('Dewayne', 'allen');

 ?>
