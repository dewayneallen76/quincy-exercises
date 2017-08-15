<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$test = new Rectangle(5,4);
$test2 = new Square(5,4);

echo "The area is " . $test->area();
echo "The perimeter is " . $test2->perimeter();

 ?>
