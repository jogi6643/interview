<?php

echo '<p>1.Warning Error:</p>';

// echo "Warning error"';
// include ("external_file.php");
//
echo '<p>As there is no “external_file”, the output displays a message, notifying it failed to include it. Still, it doesn’t stop executing the script</p>';

echo '<p>2.Notice Error:</p>';
// $a="Defined error";
// echo "Notice error";
// echo $b;
echo '<p>In the script above, we defined a variable ($a), but called on an undefined variable ($b). PHP executes the script but with a notice error message telling you the variable is not defined</p>';;

echo '<p>3.Parse Error (Syntax):</p>';
// echo "Red";
// echo "Blue";
// echo "Green"

echo '<p>It is unable to execute because of the missing semicolon in the third line.</p>';

echo '<p>Fatal Error</p>';

// function sub()
// {
// $sub=6-1;
// echo "The sub= ".$sub;
// }
// div();

echo '<p>The output tells you why it is unable to compile, as in the image below:</p>';