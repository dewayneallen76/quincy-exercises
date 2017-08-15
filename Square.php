<?php

require_once 'Rectangle.php';

class Square extends Rectangle
{
  public function perimeter()
  {
    return ($this->height + $this->width) * 2 . PHP_EOL;
  }
}

?>
