</<?php 
class Senior{
	function print1(){
		echo "<br/>hello from Senior";
	}
	function sayHello(){
		echo "<br/>still i am senior";
	}
}

class Junior extends Senior{
	function print2()
	{
		echo "<br/>yeah.. I am Junior..";
	}
}

$senior = new Senior();
$junior = new Junior();
$senior->print1();
$junior->print2();
echo "<br/>now from junior to senior...";
$junior->sayHello();

 ?>