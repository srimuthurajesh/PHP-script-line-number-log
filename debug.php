<?php

register_tick_function(function(){
    $backtrace = debug_backtrace();
    $line = $backtrace[0]['line'];
    $file = $backtrace[0]['file'];
	echo "am called<br>";
	
/*	echo "<pre>";
	print_r($backtrace);
	echo "</pre>";*/
	//check whether the file is current debug file
    if ($file == __FILE__) return;
/*
    static $fp, $cur, $buf;
    if (!isset($fp[$file])) {
        $fp[$file] = fopen($file, 'r');
        $cur[$file] = 0;
    }

    if (isset($buf[$file][$line])) {
        $code = $buf[$file][$line];
    } else {
        do {
            $code = fgets($fp[$file]);
            $buf[$file][$cur[$file]] = $code;
        } while (++$cur[$file] <= $line);
    }

    $line++;
  */  echo "in $file on line $line\n<br>";
});
