<?php
function average ($array){
	$total=0;
	foreach ($array as $item){
	$total+= $item;
	};
return $total/count($array);
}
$array = array(1,3,4,5,6);
echo average ($array);
?>