<?php 
function myStrRev($string){
$string_length = strlen($string); 
$reversed_string = ''; 
 
for($i=$string_length;$i>-1;$i--){ 
$reversed_string .= $string{$i};
}
return $reversed_string;
}
$string = "Narayan Rajak";
 
echo myStrRev($string);
?>