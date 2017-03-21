

<?php
 $number = 6;                   /*number to get factorial */
 $fact   = 1;
 for($k=1;$k<=$number;++$k)    
       {
          $fact =  $fact*$k;
       }
 echo "Factorial of $number is ".$fact;
?> 