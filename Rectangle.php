<?php


class Rectangle
{
  public $height;
  public $width;

  public function __construct($height, $width)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function area()
  {
    return $this->height * $this->width;
  }

  public function perimeter()
  {
    return ($this->height + $this->width) * 2;
  }
}
 ?>
