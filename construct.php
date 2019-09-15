<?php
 class Ac
 {
 	public $model;
 	public $speed;

 	function __construct($model, $speed)
 	{
 		/*$this->model="abc";
 		$this->speed=17;*/ //for default constructor

 		//for parametrised constructor
        $this->model= $model;
        $this->speed= $speed;

 	}
 }
 //$obj1 = new Ac; //for default constructor
 /*echo "model name is- ".$obj1->model;
 echo "<br> speed is- ".$obj1->speed;*/

//for parametrized constructor

  $obj2 = new Ac("Godrej",18);
  echo "model is- ".$obj2->model;
  echo "<br> speed is- ".$obj2->speed;
?>