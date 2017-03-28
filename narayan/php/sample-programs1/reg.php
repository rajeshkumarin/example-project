<?php
$pattern = '/[^\w]fox\s/';
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog'))
  {
  echo "'fox' is present..."."\n";
  }
  else
  echo "'fox' is not present..."."\n";
?>