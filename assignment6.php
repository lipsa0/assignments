<?php
$first=array(
array(2,3,4),
array(2,3,4),
array(2,3,4) );
$second=array(
array(1,3,1),
array(1,3,1),
array(1,3,1) );


for ($i=0; $i<=3 ; $i++) { 
	for ($j=0; $j <3 ; $j++) { 
		$add[$i][$j]=$first[$i][$j]+$second[$i][$j];
echo $add[$i][$j];echo "<br>";
	}
	
}

	

?>