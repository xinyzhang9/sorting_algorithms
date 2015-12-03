<?php
	function bubble_sort($array){
		$len = count($array);
		$j = $len-1;
		while ($j > 0){
			for ($i=1; $i <= $j; $i++) { 
				if($array[$i-1] > $array[$i]){
					$tmp = $array[$i];
					$array[$i] = $array[$i-1];
					$array[$i-1] = $tmp;
				}
			}
			$j--;
		}
		return $array;
	}

	$x = array();
	for ($i=0; $i < 1000; $i++) { 
		array_push($x, rand(1,10000));
	}
	$start = microtime(true);
	$y = bubble_sort($x);
	$end = microtime(true);
	$time_used = $end - $start;
	echo "time used to sort: $time_used seconds<br>";
	var_dump($x);
	var_dump($y);
?>