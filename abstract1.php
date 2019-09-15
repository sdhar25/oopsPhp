<?php
abstract class BaseClass
{
	protected $fname;
	protected $lname;
	protected $sal;

	function __construct($f,$l)
	{
		$this->fname=$f;
		$this->lname=$l;
	}

	function getFullName()
	{
		return $this->fname . " " .$this->lname;
	}
	abstract function calcSal($sal);
}

class RegularEmp extends BaseClass
{
	protected $monthlySal;

	public function calcSal($sal)
	{
      $this->monthlySal=$sal;
      return $this->monthlySal*12;
	}
}


$obj1 = new RegularEmp("Regular","Employee");
echo "Full name is - ". $obj1->getFullName();
echo "<br> Annual Salary - " . $obj1->calcSal(10000);

?>