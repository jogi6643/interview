<?php
/*
What is Static Function
The static keyword is used in the context of variables and methods that 
are common to all the objects of the class. Therefore, 
any logic which can be shared among multiple instances of a class should 
be extracted and put inside the static method.

1.Use Self keyword use in same class and Parent Keyword for another class
2.Function Call Through className ScopeResolution functionName
3.We can't Use this Keyword and but use only Self keyword 
4.In a Class every Member and Method are Static then Class will be a Static Class
5.We can Access the data from both like Using Class and Create Object
*/
	class baseClass{
		public static $name = "Jogi";
		public static function test1()
		{
			echo "Call Test 1 Function";
		}

		public static function test2()
		{
			echo "Call Test 2 Function";
		}
        /*
		public function __construct()
		{
			self::test1();

		}
		*/
	}

	class child extends baseClass{
		public static function data()
		{
			echo parent::$name;
		}
	}

// new abc();
echo baseClass::test1();
echo "<br>";
$child = new child();
echo $child->data();
echo "<br>";
$obj = new baseClass();
echo $obj->test2();

?>

