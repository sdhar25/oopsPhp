<?php
abstract class Senior{
	abstract function funct1();
}
class Junior extends Senior{
	function funct1(){
		echo "ha ha ...";
	}
}
$obj1 = new Junior();
$obj1-> funct1();
?>