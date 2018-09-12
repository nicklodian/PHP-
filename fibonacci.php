<?php
 $i=10;
 $j;
  function fabbinocci($i){
    if($i==0||$i==1)
    	return $i;
    else
    	return fabbinocci($i-1)+fabbinocci($i-2);
  }
  for($j=0;$j<11;$j++)
  echo "  ",fabbinocci($j);
?>