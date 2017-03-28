<?php
if(isset($_POST['sub']))
 {
   $row=$_POST['row'];
      for($i=1;$i<=$row;$i++)
        {
 
           for($j=1;$j<=$i;$j++)
              {
                echo $j;
              }
            echo "<br />";
        }
 }
 ?>
 <table>
 <form method="post" name="frm" action="">
 <tr>     <td>Enter Number of rows:</td>     <td><input type="text" name="row" /></td>   </tr>
 <tr><td></td>      <td><input type="submit" name="sub" /></td>  </tr>
 </form>
 </table>