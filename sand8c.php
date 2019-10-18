<?php
$a1=array(
array(1,2),
array(1,2)
);
$a2=array(
array(3,2),
array(6,8)
);
$result=array();
for($i=0;$i<=1;$i++) {
for($j=0;$j<=1;$j++) {
$result[$i][$j]=0;
for($k=0;$k<=1;$k++)
$result[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
}
}
echo "<h1> First Matrix </h1>";
echo "<pre/>";  print_r($a1);
echo "<h1> Second Matrix </h1>";
echo "<pre/>";  print_r($a2);
echo "<h1> Resultant Matrix</h1>";
echo "<pre/>";  print_r($res);
?>
