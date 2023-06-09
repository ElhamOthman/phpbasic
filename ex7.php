<?php

$a = "elahmothmanmasri";
$a_search = "a";
$count = 0;

for($x=0 ; $x < strlen($a); $x++){
    if (substr($a,$x,1)==$a_search){
        $count = $count + 1;  
    }
}
echo $count."\n";

















?>