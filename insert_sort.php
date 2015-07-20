<?php 
$arr = array();
$count = 0;
for ($i=0; $i < 100 ; $i++) { 
	$arr[$i] = rand(1, 1000);
}

$temp = 0;
$num = 0;
while ($num < 100) {
	for ($i=$num; $i >= 1  ; $i--) {
	$count++;
		if($arr[$i] < $arr[$i-1]) {
			$temp = $arr[$i-1];
			$arr[$i-1] = $arr[$i];
			$arr[$i] = $temp;
		}

	}
	$num++;
	foreach ($arr as $value) {
	echo $value.' ';
}
echo "<br />";
}
echo $count;
?>