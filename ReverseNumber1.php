<html>
    <body>
        <form  method="post">
            <input type="text" name="number" placeholder="Enter the Number" required><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $revnumber=0;
while($number>1){
    $revnumber*=10;
    $revnumber=$revnumber+$number%10;
    $number/=10;
}
echo "The Reverse of  " . $_POST['number']. " is ".$revnumber;
}
?>