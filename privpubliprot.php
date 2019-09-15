<?php
class Test{
	var $var1 = "ha ha ha ";
    private $var2 = "hi hih hi";
    protected $var3 = "bahbahabha";

    function funct1(){
    	echo "in func1<br/>";
    }
    private function funct2(){
    	echo "in funct2 private <br/>";
    }
    protected function funct3(){
    	echo "in funct 3 protected <br/>";
    }
}

class Test2 extends Test{
	function funct4(){
		echo "in test2...<br/>";
		$objTest1 = new Test();
		$objTest1->funct3();
		//$objTest1->funct2();      /*cannot be call*/
	}

}
$obj1 = new Test2();
$obj1->funct4();
$obj1->funct1();

?>