<?php 
$arr = array(1, 3, 5, 1, 8, 3, 4, 6, 8);
var_dump($arr);

echo "<br />";
$digits = array();
for ($i=0; $i < 9; $i++) { 
	$digits[$i] = $i+1;
}
var_dump($digits);
echo "<br />";
$count = count($arr);
$checks = array();
for ($m=0; $m < 9; $m++) { 
	$checks[$m] = 0;
}
var_dump($checks);
echo "<br />";

for ($j=0; $j < $count ; $j++) { 
	for ($p=0; $p < 9 ; $p++) { 
		if ($arr[$j] == $digits[$p]) {
			$checks[$p]++;
		}
	}
}
var_dump($checks);
echo "<br />";
for ($n=0; $n < 9 ; $n++) { 
	if ($checks[$n] !== 0) {
		for ($q=0; $q < $checks[$n]; $q++) { 
			echo $digits[$n].' ';
		}
	}
}
?>