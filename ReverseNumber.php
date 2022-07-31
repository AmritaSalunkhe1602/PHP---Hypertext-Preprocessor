<?php
$number=123;
$revnumber=0;
while($number>1){
    $revnumber*=10;
    $revnumber=$revnumber+$number%10;
    $number/=10;
}
echo "The Reverse Number is ".$revnumber;
?>