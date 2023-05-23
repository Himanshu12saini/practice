<?php
$sum=0;
function armstrong($num){
    if($num==0){
     return;
    }
    $r = $num%10;
    $sum = $r*$r*$r;
    $num = $num/10;
    return $sum + armstrong($num);
}
echo armstrong(153);
?>