<html>
<body>
<form method ="post">
Enter Number:<input type="number" name="number" >
<input type="submit" name="submit" value="Submit">
</form>


<?php
if($_POST){
$fact =1;
$num =$_POST['number'];
echo "Factorial of $num:<br><br>";
for($i=1; $i<=$num; $i++)
{
$fact=$fact * $i;
}
echo $fact ."<br>";
}
?>
</body>
</html>