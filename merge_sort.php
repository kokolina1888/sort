<?php  
$arr = array();
for ($i=0; $i < 8 ; $i++) { 
	$arr[$i] = rand(1, 1000);
}

/*foreach ($arr as $value) {
	echo $value.' ';}
	echo "<br />";*/
	$n = 1;
	$count = count($arr);

//подреждане по двойки 0-1, 2-3, ..
	while ($n <= $count) {
		$i = $n;
		if ($arr[$i-1] > $arr[$i]) {
			$temp[0] = $arr[$i] ;
			$temp[1] = $arr[$i-1];
		} else {
			$temp[0] = $arr[$i-1];
			$temp[1] = $arr[$i];
		}

		$arr[$i-1] = $temp[0];
		$arr[$i] = $temp[1];
		$n += 2;
	}


	$m = 0;
//подреждане по четворки
	while ($m < $count) {
		$p = $m;
		if ($arr[$p] < $arr[$p+2]) {
			$temp[$p] = $arr[$p];
			$temp[$p+1] = $arr[$p+2];
		} else {
			$temp[$p] = $arr[$p+2];
			$temp[$p+1] = $arr[$p];
		}
		if ($arr[$p+1] < $temp[$p+1]) {
			$help = $temp[$p+1];
			$temp[$p+1] = $arr [$p+1];
			$temp[$p+2] = $help;
			$temp[$p+3] = $arr[$p+3];
		} elseif ($arr[$p+3] < $temp[$p+1]) {
			$help = $temp[$p+1];
			$temp[$p+1] = $arr[$p+3];
			$temp[$p+2] = $help;
			$temp[$p+3] = $arr[$p+1];
		} elseif ($arr[$p+1] < $arr[$p+3]) {
			$temp[$p+2] = $arr[$p+1];
			$temp[$p+3] = $arr[$p+3];
		} elseif ($arr[$p+1] > $arr[$p+3]) {
			$temp[$p+2] = $arr[$p+3];
			$temp[$p+3] = $arr[$p+1];
		}
		$m+=4;
	}

//подреждане по осмици
	foreach ($temp as $value) {
		echo $value.' ';}
		echo "<br />";
	for ($i=0; $i < $count; $i++) { 
			$arr[$i] = $temp[$i];
		}	
		foreach ($arr as $key => $value) {
			echo $key.'->'.$value.' ';
		}
		echo "<br />";
		$m = 0;
		$q = 0;
		$p = 4;	
		while ($m < $count && $p < 8 && $q < 4) {						
			
		if ($arr[$q] < $arr[$p]) {
				$temp[$m] = $arr[$q];
				unset($arr[$q]);
				$q++;
			} elseif($arr[$q] > $arr[$p]) {
				$temp[$m] = $arr[$p];
				unset($arr[$p]);
				$p++;
				
			} 
			$m++;}

while ($m < $count) {
	
		if (!empty($arr[$q]) && empty($arr[$p]) && $q < 8) {
				$temp[$m] = $arr[$q];
				$q++;
			} elseif (empty($arr[$q]) && !empty($arr[$p]) && $p < 4) {
				$temp[$m] = $arr[$p];
				$p++;
			}
			$m++;
		}
		foreach ($temp as $value) {
		echo $value.' ';}
		echo "<br />";
		var_dump($arr);

		?>	

