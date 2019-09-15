<?php
interface MyInterface{
	function meth1();
	function meth2();
}

class Myclass implements MyInterface{
	function meth1(){
		echo "meth1 <br/>";
	}
	function meth2(){
		echo "meth2<br/>";
	}
}
$obj = new Myclass();
$obj->meth1();
$obj->meth2();

?>