<?php
class Abc
{
	public function func1()
	{
		echo "from func1  ";
		return $this;
	}
	public function func2()
	{
		echo "from func2 ";
		return $this;
	}
	public function func3()
	{
		echo "from func3 ";
		//return $this;
	}
}

$obj1 =new Abc();
$obj1->func1()->func2()->func3();

?>