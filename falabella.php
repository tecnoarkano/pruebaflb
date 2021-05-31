<?php
$condiciones['01'] = 'IT';
$condiciones['10'] = 'Falabella';
$condiciones['00'] = 'Integraciones';

for($i=1;$i<=100;$i++){
	$div3 = roundnumber($i, 3);
	$div5 = roundnumber($i, 5);

	$res = $div3.$div5;
	
	echo check($i, $res, $condiciones)."<br>";
}

function check($i, $res, $condiciones){
	if($res == '11')
		return $i;
	
	return $condiciones[$res];
}

function roundnumber($num, $round){
	$res = ($num % $round);
	while($res > 1) $res--;
	
	return $res;
}