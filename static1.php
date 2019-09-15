<?php

class ClassA
{
	public static $count=0;

	function __construct()
	{
		self :: $count++;
	}

	static function getCount()
	{
		return self :: $count;
	}
}
$obj1 = new ClassA();
$obj2 = new ClassA();
$obj3 = new ClassA();
echo ClassA::getCount();
?>