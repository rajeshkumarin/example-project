<?php
$str1 = 'A lazy fox jump on the river';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."\n";
?>