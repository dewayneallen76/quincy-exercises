<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//
// $items = ['First', 'Second', 'Third'];
// array_push($items, 'Fourth', 'Fifth', 'Sixth');
// print_r($items);



function combineArrays($array1, $array2)
{
	$merge = [];
	foreach($array1 as $index => $name) {
		array_push($merge, $name);
	   if ($name != $array2[$index]) {
        print_r($array2[$index]);
		    array_push($merge, $array2[$index]);
	    }
  }
	print_r($merge);
}

combineArrays($names, $compare);
