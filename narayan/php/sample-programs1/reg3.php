<?php
$string = 'abcde$ddfd @abcd )der]';
echo 'Old string : '.$string."\n";
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
echo 'New string : '.$newstr."\n";
?>