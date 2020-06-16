<?php
$dire = 30.00;
$func = 20.00;
$esta= 10.00;
$bunu;

for ($i = 0;$i <= 2; $i++){
   
if($i=0){
	$bunu=20;
}
if ($i=1){
	$bunu=10;
}
if ($i=2){
	$bunu=5;
}
}
calcular($dire,$func,$esta);
bbb ($dire,$func,$esta);
ccc ($dire,$func,$esta);
function calcular ($dire, $func, $esta)
{
	$r=$dire*(20/100);

echo $r,"</br>";
}

function bbb ($dire,$func,$esta)
{
	$r=$func*(10/100);

echo $r,"</br>";
}

function ccc ($dire,$func,$esta)
{
	$r=$esta*(5/100);
	echo $r;
}
?>