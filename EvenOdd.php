<html>
<body>
<form method="post">
Enter Number :
<input type="number" name="number">
<input  type="submit" value="Submit" >
</form>
</body>
</html>

<?php
if($_POST){
$number=$_POST['number'];

if($number%2==0){
echo "$number is even";
}
else{
 echo "$number is odd";
}

}
?>