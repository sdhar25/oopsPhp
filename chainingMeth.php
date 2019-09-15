<?php

class Abc
{
	public $value= "Hello from Abc ";
}

class Xyz
{
	public $abc;
	public function __construct()
	{
      $this->abc=new Abc();
	}
}

$obj1 = new Xyz();
echo $obj1->abc->value;
?>