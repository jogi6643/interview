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