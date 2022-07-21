<html>
<body>
<form action="" method="post">
Enter a number :<input type="text" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
if($_POST)
{
$a=$_POST['number'];
$b=$a;
$total=0;
while($b != 0){
$rem=$b%10;
$total=$total+$rem*$rem*$rem;
$b=$b/10;
}
if($a == $total)
{
echo "$a is Armstrong Number";
}
else 
{
echo "$a is not Armstorng number";
}
}
?>