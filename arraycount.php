<?php 
$arr = array(1,1,2,2,3,1);
$arr1 = array();
for($i=0;$i<count($arr);$i++)
{
   if(isset($arr1[$arr[$i]]))
   {
    $arr1[$arr[$i]] = $arr1[$arr[$i]] + 1;
   }
   else
   {
    $arr1[$arr[$i]] = 1;
   }
}

print_r($arr1);


*    
* *   
* * *  
* * * * 
* * * * *

for($i=1;$i<=5;$i++)
{
$k=1;

for($j=1;$j<=9;$j++)
{
if($j>=6-$i && $j<=4+$i && $k)
{
echo "*";
$k=0;
}
else
 {
 echo " ";
   $k=1;
 
 }
}
echo "<br/>";

}
