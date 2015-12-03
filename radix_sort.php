<?php 
	function radix_sort($array){
		$len = count($array);
		$array_all_digits = array();
		//initialize tmp array
		$array_tmp = array();
		for ($i=0; $i < $len; $i++) { 
			array_push($array_tmp,0);
		}
		$k = 1;
		while(true){
			//initialize module array
			$array_module = array();
			for ($i=0; $i < 10; $i++) { 
				array_push($array_module, 0);
			}
			//initialize digit array
			$array_d = array();
			for ($i=0; $i < $len; $i++) { 
				array_push($array_d, floor($array[$i]/$k) % 10);
			}
			if(array_sum($array_d) == 0){
				return $array_tmp;
			}
			//put array_d into module, count
			for ($i=0; $i < $len; $i++) { 
				$array_module[$array_d[$i]]++;
			}
			//increment module array
			for ($i=1; $i < 10; $i++) { 
				$array_module[$i]+=$array_module[$i-1];
			}
			//move element from array to array_tmp
			for ($i=$len-1; $i >=0 ; $i--) { 
				$d = $array_d[$i];
				$array_module[$d]--;
				$array_tmp[$array_module[$d]] = $array[$i];
			}
			$array = $array_tmp;

			$k=$k*10;
		}
	return $array_tmp;
}


//demo
	$x = array();
	for ($i=0; $i < 100; $i++) { 
		array_push($x, rand(1,1000));
	}
	$start = microtime(true);
	$y = radix_sort($x);
	$end = microtime(true);
	$time_used = $end - $start;
	echo "time used to sort: $time_used seconds<br>";
	var_dump($x);
	var_dump($y);

?>