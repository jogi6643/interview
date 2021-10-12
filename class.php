<?php

class Jogi{
    public $name = 'jogi';
    public function __construct(){
        echo 'with  use new  keyword';
    }
    public function test(){
        echo 'use test class';
    }
}
//$obj = new Jogi();
//$test = $obj->name;
//echo $test;
echo "</br>";

class Base{
    public function __construct(){
        echo 'this is called from base class';
        echo '<br>';
    }
}
class Child extends Base{
    public function __construct(){
       
        echo 'this is called from child class';
        echo '<br>';

        parent::__construct();

    }
}
//$base = new Base();
//$child = new Child();



// Class definition
abstract class abc {
	public static $data = 'GeeksforGeeks ';
	
	public static function xyz() {
		echo "A computer science portal";
	}
}

//echo abc::$data;
//abc::xyz();

class Checkstatic{
    public static function xyz() {
        echo 'static function from non static method';
    }
    public static function paraentfunction()
    {
        echo 'This is the parents function';
    }
    public function __construct(){
         self::xyz();  
    }
}
class Check extends Checkstatic{
    // parent::__construct();
    // public static function yogi() {
    //     echo 'check class from static method';
    // }
    public function __construct(){
        parent::paraentfunction();
    }
   
    
  
}
// Check::Check();
//new Check();



class domain {
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this -> websiteName = parent::getWebsiteName();
    }	
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;

?>