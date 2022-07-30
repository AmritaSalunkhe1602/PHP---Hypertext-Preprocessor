<?php
// Fibonacci Series is defined as in which we get next term by adding previous two terms.
$n1=0;
$n2=1;
$nextnum=0;
for($i=0;$i<=5;$i++){
    echo $n1;
    $n1=$n1+$n2;
    $n2=$nextnum;
    $nextnum=$n1;
    
}
?>