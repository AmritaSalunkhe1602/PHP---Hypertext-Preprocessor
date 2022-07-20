<?php
$con=mysqli_connect("localhost","root","","php");
$Id=$_GET['id'];
$delete= "delete from product where id='$Id'";
$query=mysqli_query($con,$delete);
if($query){
   
    header('location:CRUD.php');
}
else{
    echo "<script>alert('Try Again')</script>";
}
?>