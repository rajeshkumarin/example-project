/*Why we use list() function in PHP ?*/ <br>
<?php
$varArray = array("PHP","MYsql","Jquery");
list($a, $b, $c) = $varArray;
echo  "I have knowledge of $a,$b and $c.";  
?>