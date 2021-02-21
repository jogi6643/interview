<?php
/*
What is PolyMorphism 
1.Function Name Are same and function behavior are differnt
*/



class shape{
  public function calArea()
  {
      echo "This is the Shape";
  }
}

class circle extends shape{
    public function calArea()
    {
        echo "This is Circle";
    }
  
}
class rectangle extends shape{
 public function calArea()
 {
     echo "This is Rectangle";
 }
}
class square extends shape{
 public function calArea()
 {
     echo "This is Square";
 }

}

 /*Shape data from base Class*/
 $shape = new shape();
 echo $shape->calArea();
 echo "<br>";
 /*Circle */
 $circle = new circle();
 echo $circle->calArea();
 echo "<br>";
 /*Rectangle*/
 $rec = new rectangle();
 echo $rec->calArea();
 echo "<br>";
 /*Square*/
 $sq = new square();
 echo $sq->calArea(); 
 echo "<br>";
?>