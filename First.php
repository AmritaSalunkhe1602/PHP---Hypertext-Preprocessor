<table border="1px solid" width="100%";>
<?php
echo "Multiplication Table";
 for($i=1; $i<=10; $i++){
 echo "<tr>";
 for($j=1; $j<=20; $j++){
 $product=$i*$j;
 echo "<td>$product</td>";
 }
 echo "</tr>";
}
?>
</table>

<?php
echo "print table of given number";
echo "<br>";
define('a',4);
for($i=1; $i<=10; $i++){
echo $i*a;
echo "<br>";
}
echo "<br>";
echo "<br>";
?>

<?php
echo "Find Addition of two numbers";
echo "<br>";
$a=10;
$b=20;
$c=$a+$b;
echo "Adition of given two numbers is : " .$c;
echo "<br>";
echo "<br>";

echo "Find string Length";
echo "<br>";
$str="Welcome to the world of PHP";
$strlength=strlen($str);
echo "The Given string is :$str";
echo "<br>";
echo "The length of given string is :" .$strlength;
echo "<br>";
echo "<br>";

echo "Concatenate the two Strings";
echo "<br>";
$name="Amruta";
$middlename="Anil";
$surname="Salunhke";
$class="MScII";
$University="Shivaji University , Kolhapur";
echo "My name is " .$name. " " .$middlename. " " .$surname. " , pursuing in " .$class. " year at $University  . ";
echo "<br>";
echo "<br>";

echo "Find Position Of the character in the string";
echo "<br>";
$str="Welcome to the , Amruta's World!";
$find ="A";
$position=strpos($str,$find);
echo "The position of the $find character , in the string $str is , " .$position;
echo "<br>";
echo "<br>";

echo "Find Area of circle";
echo "<br>";
$pi=3.14;
$r="4cm";
$area=$pi*$r*$r;
echo "The area of the circle is :" .$area. "cm<sup>2<sup>";
echo "<br>";
echo "<br>";

echo "Dispaly Array Elements";
echo "<br>";
$arr=array(97,89,12,23,15,10);
sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";
echo "<br>";


echo "Count Number of lines in file";
echo "<br>";
$file=basename($_SERVER['PHP_SELF']);
$lines=count(file($file));
echo "Number of lines  in $file is " .$lines;
echo "<br>";
echo "<br>";

echo "Find PHP Version";
echo "<br>";
echo "The Verssion of the PHP is ".phpversion();
echo "<br>";
echo "<br>";


echo "Find Greatest NUmber";
echo "<br>";
function test($n){
$r=$n>30
?  "Greater  than 30"
:  ($n>20
?  "Greater than 20"
:  ($n>10
?  "Greater than 10"
:  "Input Number at least greater than 10!"));
echo  $n. ":".$r;
}
test(14);
test(44);
echo "<br>";
echo "<br>";


echo "Add digits in the given number";
echo "<br>";
$n=123;
$sum=0;
$rem=0;
for($i=0; $i<=strlen($n); $i++){
$rem=$n%10;
$sum += $rem;
$n /= 10;
}
echo "Sum of digits in th number is :" .$sum;
echo "<br>";
echo "<br>";

echo "Find Even Odd Numbers";
echo "<br>";
$n=2;
if($n%2==0){
echo "The given number " .$n." is Even Number";
}
else{
echo "The given number " .$n." is Odd number";
}
echo "<br>";
echo "<br>";




echo "Find Number is prime or not";
echo "<br>";
$n=7;
for($i=2; $i<=$n-1; $i++){ 
 if($n % $i == 0){
$value =True;
}
}
if(isset($value) && $value){
echo "The given number " .$n. " is not prime number" ;
}
else{
echo "The given number " .$n. " is prime number" ;
}

echo "<br>";
echo "<br>";


echo "print prime numbers within a range";
echo "<br>";
$count = 0;
$num = 2;
while ($count < 15){
$div_count=0;
for($i=1; $i<=$num; $i++){
if($num % $i == 0){
$div_count++;
}
}
if($div_count<3){
echo $num.",";
$count=$count+1;
}
$num=$num+1;
}
echo "<br>";
echo "<br>";

echo "Factorial of given number";
echo "<br>";
$num=3;
$factorial=1;
for($i=$num; $i>=1;$i--){
$factorial = $factorial*$i;
}
echo "Factorial of $num is $factorial";
echo "<br>";
echo "<br>";

echo "Check Whether Number is Armstorng or not";
echo "<br>";
$a=408;
$total=0;
$b=$a;
while($b!=0)
{
$rem=$b%10;
$total=$total+$rem*$rem*$rem;
$b=$b/10;
}
if($a==$total)
{
echo "$a is Armstrong Number";
}
else 
{
echo "$a is not Armstrong Number";
}
echo "<br>";
echo "<br>";


echo "Check Number for pallindrome";
echo "<br>";
function pallindrome($a){
$num = $a;
$sum = 0;
while(floor($num)){
$rem = $num % 10;
$sum = $sum*10+$rem;
$num=$num/10;
}
return $sum;
}
$x = 123;
$num = pallindrome($x);
if($x==$num){
echo "$x is a Pallindrome number";
}
else{
echo "$x is not pallindrome number";
}
echo "<br>";
echo "<br>";

echo "Fibonacci Series";
$n = 0;
$n1 = 0;
$n2 = 1;
echo "\n";
echo $n1.' '.$n2.' ';
while($n < 10)
{
$n3 = $n2 + $n1;
echo $n3.' ';
$n1 = $n2;
$n2 = $n3;
$n = $n+ 1;
}
echo "<br>";
echo "<br>";

echo "Reverse The number";
$n=1234;
$rev=0;
while($n> 1)
{
$rem=$n%10;
$rev=$rev*10+$rem;
$n=$n/10;
}
echo "Reverse of $n is : $rev";
?>

