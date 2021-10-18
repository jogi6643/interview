<?php
/*What is Interface:- Interface just like a class ,which contains only abstract method
1.can't Create a Object of Interface
2.Work Like a Abstract Class
3.Define Method But can't Implements 
4. Multiple Inteface in One Class but not Other Like inheritance,trait,abstract
5.We can't declare Member variables like public,private,protected
*/

interface abc1{
	// private $name ="harsh";
	public function hello1();
}


interface abc2
{
	public function hello2();
}

class demo implements abc1,abc2{
	public function hello1()
	{
		echo "Call For Hello1";
	}
	public function hello2(){
		echo "Call For Hello2";
	}

}

$demo = new demo();
echo $demo->hello1();

?>

