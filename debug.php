<?php

/*Register a function for execution on each tick*/
register_tick_function(function(){
   
    //check whether the file is current debug file
    if ($file == __FILE__) return;
   
    $backtrace = debug_backtrace();
    $line = $backtrace[0]['line'];
    $file = $backtrace[0]['file'];
    
    /*printing executed line filname & line*/
    echo "in $file on line $line\n<br>";
});
