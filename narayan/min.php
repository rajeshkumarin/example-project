<?php
$numbers=array(12,23,45,20,5,6,34,17,9,56);
$length=count($numbers);
$min=$numbers[0];
for($i=1;$i<$length;$i++)
  {
      if($numbers[$i]<$min)
        {
          $min=$numbers[$i];
        }
  }
echo "The smallest number is ".$min;

?>