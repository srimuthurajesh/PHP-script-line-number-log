<?php

declare(ticks=1);
include_once 'debug.php';

/*just dummy program to log the line number*/
	$a = 'name1';
	$b = 'name2';
	if(1==2){
		$a;
	}else{
		$b;
	}
	$c = $a . $b;
	$d = $e = "hello";
	strlen($d);
	$coolFunction=function(){
		echo $str="cool";	
	};

