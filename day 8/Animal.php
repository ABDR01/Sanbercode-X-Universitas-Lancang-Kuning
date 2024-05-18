<?php
class Animal
{
  public $name;
  public $legs = 4;
  public $coldblooded = "tidak";

  public function __construct($name)
  {
    $this->name = $name;
  }
}
