<?php

class Ac
{
	public $model;
	public $speed;

     function __construct($model, $speed)
     {
        $this->model=$model;
        $this->speed=$speed;
     }
	function speedUP()
	{
		$this->speed++;
	}
	function speedDown()
	{
		$this->speed--;
	}
}

 class childAc extends Ac
 {
    public $bluetooth;

    function __construct($bluetooth)
    {
    	parent::__construct("Godrej",20);
    	$this->bluetooth = $bluetooth;
    	
    }
 }

 $objP = new Ac("Samsung",18);
 echo "model is- ".$objP->model . " Speed is- ". $objP->speed;

 $obj1 = new childAc(true);

 echo "<br><br>Model is- ".$obj1->model." ,Speed is- ".$obj1->speed." and Bluetooth- ".$obj1->bluetooth;
?>
