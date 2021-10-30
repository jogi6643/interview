<?php 

for ($i=1; $i <=5; $i++) { 
    $k = 1;
    for ($j=1; $j <=9;$j++) { 
        if($j>=6-$i && $j<=4+$i && $k)
        {
         echo "*";;
         $k = 0;   
        }
        else
        {
            echo "_";
            $k = 1;
        }
    }
    echo "<br/>";
}

// Prime numbers are

for ($p=1; $p <= 20 ; $p++) { 
    $count = 0;
    for ($q=1; $q <=$p ;$q++) { 
        if($p%$q==0)
        {
            $count = $count + 1;
        }
    }
    if($count==2)
    {
        echo $p;
        echo "</br>";
    }
}


for ($i=5; $i >=1; $i--) { 
    $k = 1;
    for ($j=1; $j <=9;$j++) { 
        if($j>=6-$i && $j<=4+$i && $k)
        {
         echo "*";;
         $k = 0;   
        }
        else
        {
            echo "_";
            $k = 1;
        }
    }
    echo "<br/>";
}



for ($i=1; $i <=5; $i++) { 
    
    for ($j=1; $j <=$i;$j++) { 
        echo '*';
    }
    echo "<br/>";
}

$array = array(1,6,3,4,5);
$newarray = array();
$temp = 0;
for ($i=1; $i <=count($array);$i++) {


}