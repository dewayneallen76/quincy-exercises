<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// 
// $items = ['First', 'Second', 'Third'];
// array_push($items, 'Fourth', 'Fifth', 'Sixth');
// print_r($items);


function compareArrays($array1, $array2) {
  $mergedArray = [];
  foreach($array1 as $index => $name) {
    echo $name . PHP_EOL;
  }
}

compareArrays($names, $compare);
