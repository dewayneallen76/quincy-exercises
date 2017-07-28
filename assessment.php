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
  $total = 0;
  for($i = 0; $i < count($array); $i++) {
    $total += $array[$i];
  }
  return $total / count($array);
}

// Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.

function countOdds($array)
{
  $total = 0;
  for($i = 0; $i < count($array); $i++) {
    if($array[$i] % 2 !== 0) {
      $total++;
    }
  }
  return $total;
}

// Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

function convertNameToAssociativeArray($string)
{
  $nameArray = explode(' ', $string);
  $associativeArray = [];
  $associativeArray['firstName'] = $nameArray[0];
  $associativeArray['lastName'] = $nameArray[1];
  return $associativeArray;
}

// Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.

function fiveTo($input)
{
  $array = [];
  if($input > 5) {
    for($count = 5; $count < $input; $count++){
      array_push($array, $count);
    }
    return $array;
  } else {
    return $array = [5];
  }
}
