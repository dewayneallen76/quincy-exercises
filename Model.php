<?php

class Model {

  private $attributes = [];

  public function __get($name)
  {
    if(isset($this->attributes['name'])) {
      return $this->name = $attributes['name'];
    }
    return null;
  }

  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }
}

$test = new Model;
$test->name = 'Dewayne';
$test->phone = '8675309';
$test->email = 'dewayne@here.com';

var_dump($test);

 ?>
