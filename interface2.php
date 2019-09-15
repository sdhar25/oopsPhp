<?php

class Abc
{
	public static $count=0;

	public static function getData()
	{
     return self ::$count;
	}

	function __construct()
	{
		self::$count++;
	}
}

class Second extends Abc{
	static function getData()
	{
		parent :: getData();
	}
}

$obj1 = new Second();
$obj3 = new Second();
$obj2 = new Second();


echo Abc :: getData();


?>																																																																																																																																																																																																																																														