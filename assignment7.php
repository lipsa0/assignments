<?php
$first=array(
array(1,2,1),
array(1,2,1),
array(2,1,2) );
$second=array(
array(3,3,3),
array(2,3,2),
array(5,3,5) );


for ($i=0; $i<=3 ; $i++) { 
	for ($j=0; $j <=3 ; $j++) { 
		$mul[$i][$j]=$first[$i][$j]*$second[$i][$j];
echo $mul[$i][$j];echo "<br>";
	}
	
}
?>