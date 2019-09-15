<?php
//Part 1

class Ac
{
	public $model = "xyz";
	public $speed = 16;

	function speedUp()
	{
		$this->speed++;
		echo "</br> inside function SpeedUp- ". $this->speed;
	}
	function speedDown()
	{
		$this->speed--;
		echo "<br><br> inside function speedDown- ".$this->speed;
	}
}
//class close

$obj1 = new Ac;
$model_value = $obj1->model;
echo "model name of first object is - ".$model_value;
//or we can write this way
echo " <br/> model name is- ". $obj1->model;
//we can change the value  of model here
$obj2 = new Ac;
echo "<br/> new model is- ". $obj2->model="Godrej";

//now function access
$obj1->speedUp();
echo "</br> new speed is- ". $obj1->speed;

$obj1->speedDown();
echo "</br/> (from outside class)new decrease speed is- ".$obj1->speed;
?>