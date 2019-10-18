<?php
$a1=array (
	array(1,2,3),
	array(3,4,5),
	array(5,6,7)
);

echo "<h2> Matrix </h2>";
for($row=0; $row<3; $row++){
	echo "<br>";
	for($col=0;$col<3;$col++) {
		echo " ".$a1[$row][$col];
	}
}

echo "<h2> Transpose of the Matrix </h2>";
for($row=0;$row<3;$row++){
	echo"<br>";
	for($col=0;$col<3;$col++){
		echo " ".$a1[$col][$row];
	}
}
?>