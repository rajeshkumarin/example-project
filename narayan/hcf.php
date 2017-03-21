/* Write a program to find HCF of two numbers */

<?php 
if(isset($_POST['submit']))
 
{ 
 
 $num1=$_POST['number1'];
 
 $num2=$_POST['number2'];
 
         function hcf($i1,$i2)
 
             {
 
                 if($i2!=0)
 
                   {
 
                     return hcf($i2,$i1%$i2);
 
                   }
 
                  else
 
                   {
 
                    return $i1;
 
                   }
 
             }
 
             
 
 $hcfofnumber=hcf($num1,$num2);   
 
}
?>
    
<html>
 
<head>
 
<title>Hcf</title>
 
</head>
 
<body>
 
<table>
 
<form name="frm" method="post" action="">
 
<tr><td>Number1:</td><td><input type="text" name="number1" /></td></tr>
 
<tr><td>Number2:</td><td><input type="text" name="number2" /></td></tr>
 
<tr><td></td><td><input type="submit" name="submit" value="submit" /></td>
 
<td><center><span>
<?php if(isset($_POST['submit']))
{
echo "HCF is ".$hcfofnumber; }
?>  
</span></center></td></tr>
 
</form>
 
</table>
 
 
 
</body>
 
</html>