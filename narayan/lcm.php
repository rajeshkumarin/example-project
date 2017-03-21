/* Program to find the LCM of two numbers. */

<?php
if(isset($_POST['submit']))
{
 
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
 
    $hcf = gcd($num1, $num2);
    $lcm = ($num1*$num2)/$hcf;
}
 
 function gcd($x, $y)
  {
		if ($x == 0) {
		return $y;
		}
		
		while ($y != 0) {
			if ($x > $y) {
			   $x = $x - $y;
			}
			else {
			   $y = $y - $x;
			}
		}
 
    return $x;
  }

?>
 
<html>
 
  <head>
 
   <title>LCM</title>
 
  </head>
 
  <body>
 
      <table>
 
                <form name="frm" method="post" action="">
 
                <tr><td>Number1:</td><td><input type="text" name="number1" /></td></tr>
 
                <tr><td>Number2:</td><td><input type="text" name="number2" /></td></tr>
 
                <tr><td></td><td><input type="submit" name="submit" value="submit" /></td>
 
                <td><center><span>
                  <?php
                   if(isset($_POST['submit']))
                  {
                  echo "LCM is ".$lcm;
                  }
               ?>  
             </span></center></td></tr>
 
               </form>
 
       </table>
 
  </body>
 
</html>