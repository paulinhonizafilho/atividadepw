<?php
$dire = 30.00;
$func = 20.00;
$esta= 10.00;



calcular($dire);
bbb ($func);
ccc ($esta);
function calcular ($dire)
{
	$r=$dire*(20/100);

echo $r,"</br>";
}

function bbb ($func)
{
	$r=$func*(10/100);

echo $r,"</br>";
}

function ccc ($esta)
{
	$r=$esta*(5/100);
	echo $r;
}
?>