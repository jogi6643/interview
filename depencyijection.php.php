<?php 
/*

********************************************************
Service Provider: is a central place of laravel application
registering the service container,Event listener,middleware ,route


*********************************************************
Service Container: Server container is most powerful tool for
managing the class dependency and performing the dependency injection. 



*************************************************************
what is dependency Injection
1.One function dependent One class / Object  using Type Hint
2.Dependency injection is a procedure where one object supplies 
the dependencies of another object.
Dependency Injection is a software design
approach that allows avoiding hard-coding dependencies 
and makes it possible to change the dependencies both 
at runtime and compile time.

***************************************************************

****************************************************************
get::route('login','usercontroller@login');
Reverse Routing : Use Reverse routing we can create link to it.
{{ HTML::link_to_action('usercontroller@login') }}
*/

interface Database
{
	
	public function execute($sql);
}

class users implements Database{

	public function execute($sql)
	{
        echo $sql;
	}
}
class BuildQuery 
{
	protected $db;
	public function __construct(Database $db)
	{
		$this->db = $db;
	}
	public function insert()
	{
	   $sql = "insert in to table";
	   $this->db->execute($sql);
	} 
	public function update()
	{
		$sql = "update in to table";
		$this->db->execute($sql);
	}
}

$q = new users();
echo $q->execute("Database");
echo "<br>";
$q1 = new BuildQuery($q);
$q1->insert();
echo "<br>";
$q1->update();





?>