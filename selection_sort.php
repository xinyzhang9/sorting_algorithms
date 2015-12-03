<?php 
	function selection_sort($array){
		$len = count($array);
		$i = 0;
		while($i < $len){
			$min = $i;
			$max = $i;
			for ($j=$i; $j < $len; $j++) { 
				if($array[$j] < $array[$min])
					$min = $j;
			}
			//swap array[j] and array[min]
			$tmp = $array[$min];
			$array[$min] = $array[$i];
			$array[$i] = $tmp;

			$i++;
		}
	
		return $array;
	}
	//demo
	$x = array();
	for ($i=0; $i < 100; $i++) { 
		array_push($x, rand(0,10000));
	}
	$start = microtime(true);
	$y = selection_sort($x);
	$end = microtime(true);
	$time_used = $end - $start;
	echo "time used to sort: $time_used seconds<br>";
	var_dump($x);
	var_dump($y);

?>