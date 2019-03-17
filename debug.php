<?php

register_tick_function(function(){
    $backtrace = debug_backtrace();
    $line = $backtrace[0]['line'];
    $file = $backtrace[0]['file'];
    //check whether the file is current debug file
    if ($file == __FILE__) return;
    echo "in $file on line $line\n<br>";
});
