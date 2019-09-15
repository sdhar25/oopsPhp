<?php
class Subject{
	var $title;
    var $price;
/* two underscore is used before construct*/
    function __construct($par1,$par2){
    	$this->title=$par1;
    	$this->price=$par2;
    }
    function getTitle()
	{
		echo "<br/>".$this->title;
	}
	function getPrice(){
		echo "<br/>".$this->price;
	}

}
$physics = new Subject("haaaa ha physics","Rs 250");
$chemistry = new Subject("organic chemistry","Rs 350");
$maths = new Subject("K.C Sinha Maths","Rs 250");

$physics->getTitle();
$physics->getPrice();
$chemistry->getTitle();
$chemistry->getPrice();
$maths->getTitle();
$maths->getPrice();
?>