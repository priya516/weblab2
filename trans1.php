<?php
 $trans = array(
 			array(1,2,3),
 			array(2,3,5),
 			array(4,5,9));

 $result=array();
 for($i=0;$i<=2;$i++)
 {
 	for($j=0;$j<=2;$j++)
 	{
 		$result[$i][$j]=$trans[$j][$i];
 	}
 }

 echo"<pre/> ";
 print_r($result);
 ?>

