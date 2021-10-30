<?php
/*
What is abstract class:- abstract class is just like a class ,which contains only one abstract methods, members
1. We can't create direct object
2.Member and Method define in Abstract Class.
3.Code Resuablity every extend Class
*/

abstract class BaseEmployee{
	protected $firstName;
	protected $lastName;
	public function __construct($f,$l)
	{
		$this->firstName = $f;
		$this->lastName = $l;
	}
	public function getFullName()
	{
		return $this->firstName ." ".$this->lastName;
	}
	public abstract function getSalary();
}
class FullTimeEmployee extends  BaseEmployee
{
	protected $annualSalary = 324000;
	public function getSalary()
	{
		return $this->annualSalary;
	} 
}

class  ContractEmployee extends BaseEmployee
{
	protected $hourlySalary = 800;
	public function getSalary()
	{
		return $this->hourlySalary;
	} 
}

$fullTimeEmp = new FullTimeEmployee("FullTime","Employee");
echo $fullTimeEmp->getFullName();
echo $fullTimeEmp->getSalary();
echo "<br>";
$contractEmp = new ContractEmployee("Contract Type","Employee");
echo $contractEmp->getFullName();
echo $contractEmp->getSalary();

echo "</br>";
echo "Example 2";


abstract class parentClass{

	abstract protected function cal();
}
class childChild extends parentClass{

	public function cal(){
		echo 'calculations ok';
	}
}

$chi = new childChild();
$chi->cal();

?>

