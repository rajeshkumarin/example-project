<!---Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.-->

<?php
$odate = "2016-12-27";
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate."\n";
?>