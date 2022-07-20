<html>
<form action=" " method="post">
Enter a Number :<input type="text" name="number">
<input type="submit" name="submit">
</form>
</html>

<?php
if($_POST){
$num = $_POST['number'];
$reverse = strrev($num);

if($num == $reverse){
echo "$num  is Pallindrome";
}
else{
echo "$num is not a Pallindrome";
}

}
?>