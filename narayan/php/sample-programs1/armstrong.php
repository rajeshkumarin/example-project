<?php
if(isset($_POST['number']) && $_POST['number']!='')  
    {    
        
        $number = $_POST[ 'number' ];      // get the number entered by user
       
        $temp = $number;
        $sum  = 0;
       
        while($temp != 0 )
        {
            $remainder   = $temp % 10; //find reminder
            $sum         = $sum + ( $remainder * $remainder * $remainder ); 
            $temp        = $temp / 10; 
 
       }
        if( $number == $sum )
        {
            echo "$number is an Armstrong Number";
        }else
        {
            echo "$number is not an Armstrong Number";
        }
    }
?>
<html>
   <head>
     <title>Armstrong Number</title>
   </head>
 <body>
  <table>
    <form name="frm" method="post" action="">
         <tr><td>Number:</td><td><input type="text" name="number" /></td></tr>
         <tr><td></td><td><input type="submit" name="submit" value="Check" /></td>
         <td>
          <center><span>
           <?php if(isset($_POST['sub']))
           {if($check==0)
               {echo "It is a  Armstrong Number";
               }
           else
                {
                 echo "It is not a  Armstrong Number";}
                }
           ?>
          </span>
          </center>
         </td>
         </tr>
    </form>
  </table>
</body>
</html>