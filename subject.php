<?php
class Subjects{
	var $title;
	var $price;

	function setTitle($par){
		$this->title = $par;
	}
	function setPrice($par){
		$this->price = $par;
	}
	function getTitle()
	{
		echo "<br/>".$this->title;
	}
	function getPrice(){
		echo "<br/>".$this->price;
	}

}
$physics = new Subjects();
$physics->setTitle("ha ha h ah physics...");
$physics->setPrice("Rs.250");

$chemistry = new Subjects();
$chemistry->setTitle("organic chemistry");
$chemistry->setPrice("Rs.150");

$maths = new Subjects();
$maths->setTitle("K.C Sinha Maths");
$maths->setPrice("Rs.350");

$physics->getTitle();
$physics->getPrice();
$chemistry->getTitle();
$chemistry->getPrice();
$maths->getTitle();
$maths->getPrice();

?>