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


Namespace:They allow the same name to be used for more than one class
Second.php												First.php
namespace second;										namespace first;
class test{ 														class test{
public function test_second(){							public function test_first() { 
echo 'sencond class'}
}																echo 'test_first';
															}
														}

Call namespace;
third.php

required first.PHP
required second.PHP
$obj = new first\test();
$obj->test_first();
$obj1 = new second\test();
$obj1->test_second();




Middleware : filter the http request
App\Http\Middlewaredirectory
php artisan make:middleware middlewareName
Registring a middleware
App\Http\Kernel
Type of middlewares
1.Global Middleware
2.Assigning middleware to route
3.Grouping middleware

Serialization: when we build an Api in laravel ,you need to convert model and reletionship to array format
json format



Application Programming Interface (API) is a set of requirements,
 instructions, 
 and standards that allow an application to employ services or features of some other device, application, or platform for providing better services.
 
REST (Representational State Transfer) is a kind of architectural implementation for 
improving communication between various applications. 
It is based on the concept of making particular 
info obtainable only when requested via references, 
rather than an entire copy of the information. 
World Wide Web happens to be an example of those systems which follow this architecture, 
and these are known as RESTful systems.
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