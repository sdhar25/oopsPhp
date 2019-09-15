<?php

class Math
{
	static $data;
	public static function set_data($op)
	{
		self::$data=$op;
		echo "self :: \$data = ". self::$data;
		echo "<br>";
		echo "Adding one to self :: \$data - ";
		$item =self::$data;
		$item++;
		echo $item; 
	}
}
Math ::set_data(5);


?>