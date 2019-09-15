<?php
class OverloadEg
{
	public function __construct()
	{
		echo "Impementing overloading function- <br>";


	}
	public function __call($name, $argument)
	{
		if($name == "Overload")
		{
			$count = count($argument);

			switch ($count) {
				case '1':
				    echo "<br> one argument";
					# code...
					break;

				case '2': 
				    echo "<br> two arguments";
				    break;

				case '3':
				     echo "</br> three arguments";
				     break;
				default:
					# code.
				      echo "<br> wrong arguments..";
					  break;
			}
		}
	}
}

$obj1 = new OverloadEg();
$obj1->Overload("abc");
$obj2 = new OverloadEg();
$obj2->Overload("abc","hg","gdfghfh","gfh");
?>