<?php

// Write a function named isNegative that accepts a number and returns true or false based on whether the input is negative.

function isNegative($input)
{
  if($input < 0) {
    return true;
  } else {
    return false;
  }
}

// Write a function named average that accepts an array of numbers and returns the average of those numbers

function average($array)
{
  if(!is_array($array)) {
    return false;
  }
  return array_sum($array) / count($array);
}

// Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.

function countOdds($array)
{
  $total = 0;
  foreach($array as $input) {
    if($input % 2 !== 0) {
      $total++;
    }
  }
  return $total;
}

// Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

function convertNameToAssociativeArray($string)
{
  if(!is_string($string)) {
    return false;
  }
  $nameArray = explode(' ', $string);
  $associativeArray = [];
  $associativeArray['firstName'] = $nameArray[0];
  $associativeArray['lastName'] = $nameArray[1];
  return $associativeArray;
}

// Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.

function fiveTo($input)
{
  if(!is_numeric($input)) {
    return false;
  }

  $array = [];
  if($input >= 5) {
    for($i = 5; $i <= $input; $i++){
      $array[] = $i;
    }
  }
  if($input <5) {
    for($i = 5; $i >= $input; $i--){
      $array[] = $i;
    }
  }
  return $array;
}

// Write a function named upperCaseLastNames that accepts an array of associative arrays where each associative array has indices firstName and lastName and returns the same array of associative arrays with each last name capitalized

$names = [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'granger'],
 ];

function upperCaseLastNames($array)
{
  if(!is_array($array)) {
    return false;
  }

  foreach($array as $key => $name) {
    $name['lastName'] = ucfirst($name['lastName']);
    $array[$key] = $name;
  }
  return $array;
}
