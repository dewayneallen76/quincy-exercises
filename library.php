<?php

// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.

function isEven($input)
{
  if(is_numeric($input)) {
    return $input & 2 === 0;
  } else {
    return false;
  }
}

// Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'

function isVowel($input)
{
  if(!is_string($input) && count($input) !== 1) {
    return false;
  }
  $input = strtolower($input);
  if($input === 'a' || $input === 'e' || $input === 'i' || $input === 'o' || $input === 'u') {
    return true;
  }
}

// Write a function called "first" that takes in an argument that could be an array or a string. Return the first character if the argument is a string. Return the first element of the array if the input is an array.

function first($input)
{
  if(is_array($input) || is_string($input)) {
    return $input[0];
  }
}

// Write a function called "second" that takes in input that could be an array or a string. The function should return the second character or element of the input.

function second($input)
{
  if(is_array($input) || is_string($input)) {
    return $input[1];
  }
}

// Write a function called "last" that takes in an input that could be an array or a string. Your function should return the last character or element of the input.

function last($input)
{
  if(is_array($input)) {
    return $input[(count($input) -1)];
  }
  if(is_string($input)) {
    return $input[(strlen($input) -1)];
  }

}
// Write a function called "reverse" that takes in an input of either a string or an array. Your function should return the elements or characters in reverse order.

function reverse($input)
{
  if(is_string($input)) {
    return strrev($input);
  }
  if(is_array($input)) {
    return array_reverse($input);
  }
}

// Write a function called "random" that takes in an input that can be either a string or an array. Your function should return a random element or character from the input.
function random($input)
{
  if(is_string($input)) {
    $randomIndex = mt_rand(0, strlen($input) -1);
    return $input[$randomIndex];  
  }
  if(is_string($input)) {
    return array_rand($input);
  }
}


 ?>
