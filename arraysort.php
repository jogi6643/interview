<?php 
$sort = array(1,4,2,5,7,9,8);
$temp = 0;

for ($i=0; $i <count($sort) ; $i++) { 
    # code...

    for ($j=0; $j < count($sort)-1; $j++) {
        if($sort[$j]>$sort[$j+1])
        {
            $temp = $sort[$j];
            $sort[$j] = $sort[$j+1];
            $sort[$j+1]=$temp; 
        }
    }
}

print_r($sort);