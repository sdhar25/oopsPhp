<?php

interface Inter1
{
	function demo1();
}

interface Inter2
{
	function demo2();
}


class Result implements Inter1,Inter2
{
	public function demo1()
	{
		echo "in demo1 <br>";
	}
	public function demo2()
	{
		echo "in demo2 <br>";
	}
}
$obj1=new Result;
$obj1->demo1();
$obj1->demo2();

?>