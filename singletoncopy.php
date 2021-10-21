<?php 
class Singleton{
 private static $instance = NULL;
 private function __construct() { 
 echo "DB Connected";
 }
 public static function getInstance() {
     if(self::$instance==NULL)
     {
         self::$instance = new static();
     }
     else
     {
         echo "Already Connected DB";
     }
     return self::$instance;
 }
}
$obje = Singleton::getInstance();
$obje = Singleton::getInstance();

?>