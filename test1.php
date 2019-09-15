<?php
class First{
	private $a="hello detective";
	public $b="what will Lucifer do?";
	public function display(){
		echo $this->a;
	}

}
$obj= new First();
$obj->display();
echo "<br/>";
echo $obj->b."<br/>";
var_dump($obj);
//echo "If you view the page source \r\n you will find a newline in this string.";
//echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");


?>