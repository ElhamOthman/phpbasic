<?php
$string = "my name elham";
$first = substr($string, 0,2);
$last= substr($string ,-2);
if ($first ==$last){
    echo"the first char = the last char";
}else {
    echo "the first char not equal the last char";
}








?>