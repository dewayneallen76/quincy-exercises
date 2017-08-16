<?php


class Rectangle
{
  private $height;
  private $width;

  public function __construct($height, $width)
  {
    $this->setHeight($height);
    $this->setWidth($width);
  }

  // Added getters
  public function getHeight()
  {
    return $this->height;
  }

  public function getWidth()
  {
    return $this->width;
  }

  // Added setters
  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function area()
  {
    return $this->height * $this->width;
  }

  public function perimeter()
  {
    return 2 * $this->height + 2 * $this->width;
  }
}
 ?>
