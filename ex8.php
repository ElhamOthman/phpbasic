<?php
$num = 12345678;
$sum = 0;
while ($num >0){
    $sum += $num % 10 ;
    $num = (int)($num /10);


}
echo "The sum of digits is $sum";













?>