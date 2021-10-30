<?php
echo "example of abstract class....</br>" ;
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

class RegularEmployee extends BaseEmployee
{
    protected $annualSalary = 23000;
    public function getSalary()
    {
        return $this->annualSalary;
    }
}

class ContractEmployee extends BaseEmployee
{
    protected $hourlySalary = 500;
    public function getSalary()
    {
        return $this->hourlySalary;
    }
}
$getdata = new RegularEmployee('Jogi','Singh');
$getFullName = $getdata->getFullName();
$getSalary   = $getdata->getSalary();
echo $getFullName."  ".$getSalary;
echo "</br>";
$contactData = new ContractEmployee('jonty','Singh');
$contactgetFullName = $contactData->getFullName();
$contarctSalary = $contactData->getSalary();
echo $contactgetFullName." ".$contarctSalary;

echo '</br>Interface class </br>';


interface Hello1{
    public function hello1();
}
interface Hello2{
    public function hello2();
}
class Main implements Hello1, Hello2{
    public function Hello1()
    {
        echo 'Hello1';
    }
    public function Hello2()
    {
        echo 'Hello2';
    }
}

$hell = new Main();
$hell->Hello1();
$hell->Hello2();