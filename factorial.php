<?php
$n=4;
 function fact($n){
 	if($n>=1)
 		return ($n)*fact($n-1);
 	else
 		return 1;
 }
 	echo fact($n);
?>