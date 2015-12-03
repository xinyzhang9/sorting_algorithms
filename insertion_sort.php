<?php 
	function insertion_sort($array){
		$len = count($array);
		for ($i=1; $i<$len ; $i++) { 
			$r = $array[$i];
			$j = $i;
			while ($j>0 && $array[$j-1] > $r) {
				$array[$j] = $array[$j-1];
				$j--;
			}
			$array[$j] = $r;
		}
	
		return $array;
	}


	//demo
	$x = array();
	for ($i=0; $i < 10000; $i++) { 
		array_push($x, rand(1,10000));
	}
	$start = microtime(true);
	$y = insertion_sort($x);
	$end = microtime(true);
	$time_used = $end - $start;
	echo "time used to sort: $time_used seconds<br>";
	var_dump($x);
	var_dump($y);
?>
