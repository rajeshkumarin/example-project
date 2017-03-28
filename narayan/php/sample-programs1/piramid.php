<?php
 if(isset($_POST['sub']))
 {
   $rows=$_POST['row'];
   for($i=$rows;$i>=1;--$i)
     {
         for($space=0;$space<$rows-$i;++$space)
            echo "  ";
         for($j=$i;$j<=2*$i-1;++$j)
           echo "* ";
         for($j=0;$j<$i-1;++$j)
             echo "* ";
         echo "<br />";
     }
 }
 ?>
 
<table>
 <form method="post" name="frm" action="">
 <tr>    <td>Enter Number of rows:</td>    <td><input type="text" name="row" /></td> </tr>
 <tr><td></td>    <td><input type="submit" name="sub" /></td> </tr>
 </form>
 </table>