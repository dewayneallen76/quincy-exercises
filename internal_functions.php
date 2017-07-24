<?php

// TODO: Create your inspect() function here
function inspect($a)
{
	$type = gettype($a);
	$value = $a;

	if(is_numeric($a)) {
		echo "The $type is $value".PHP_EOL;
	} elseif (is_bool($a)) {
		if ($a == 0) {
			$value = 'false';
		} elseif ($a == 1) {
			$value = 'true';
		}
		echo "The $type is $value".PHP_EOL;
	} elseif (is_array($a)) {
		if (empty($a)) {
			echo "This is an empty $type".PHP_EOL;
		} else {
			echo "This is an $type".PHP_EOL;
		}
	} elseif (is_string($a)) {
		if (empty($a)) {
			echo "This is an empty $type".PHP_EOL;
		} else {
			echo "The $type is $value".PHP_EOL;
		}
	} elseif (is_null($a))	{
			echo "This is NULL".PHP_EOL;
	}
}


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
inspect($num1) . PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
inspect($num2) . PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
inspect($num3) . PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
inspect($num4) . PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
inspect($null) . PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
inspect($string1) . PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
inspect($string2) . PHP_EOL;
echo 'Inspecting $array1' . PHP_EOL;
inspect($array1) . PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
inspect($array2) . PHP_EOL;
