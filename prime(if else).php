<?php

for($n=1;$n<=100;$n++)
{
	$t=2;
for($i=2;$i<$n;$i++)
{
	
	if($n%$i==0)	
		$t=1;
}
	if($t==1)
		echo "";
	else
		echo " ",$n;
}
?>