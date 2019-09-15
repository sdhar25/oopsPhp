<?php
class Senior{
	function mySen(){
		echo "Senior <br/>";
	}
}
class Junior{
  function mySen(){
  	echo "from junior<br/>";
  }
}
$senior = new Senior();
$junior = new Junior();
$junior->mySen();
?>