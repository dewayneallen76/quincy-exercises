<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($string) {
  $physicistsArray = explode(',', $string);
  print_r($physicistsArray);
}

humanizedList($physicistsString);
 ?>
