<?php
//return by value
function division($x,$y,$z = 10){
    return array($x,$y,$z);
}
$a = 10;
$b = 5;

$sum = division($a,$b);
print($sum[0]) + $sum[1];