<?php

// Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
  $last = array_pop($array);
  $string = implode(',', $array);
  return $string . ' and' . $last;
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(',', $physicistsString);
 print_r($physicistsArray);


 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";


 ?>
