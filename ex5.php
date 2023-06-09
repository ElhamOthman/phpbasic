<?php

function test ($x , $y){
    $n = 100;
    $val1 = abs($x - $n);
    $val2= abs($y - $n);
    return $val1 == $val2 ? 0 : ($val1 < $val2 ? $x : $y);
}
echo test (89,98) ."\n";
echo test (99 , 80) . "\n";



?>