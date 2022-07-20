<?php
$con=mysqli_connect("localhost","root","","php");
$Id=$_GET['id'];
$select="select * from product where id='$Id'";
$query=mysqli_query($con,$select);
$row=mysqli_fetch_array($query);
        ?>
          
    <form action="" method="post">
           <label for="product">Product Name:</label>
            <input type="text" name="productname" id="product" value="<?php echo $row['Name'] ?>"><br><br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?php echo $row['Price'] ?>"><br><br>
            <input type="submit" value="Update" name="update" onclick="return confirm('It will Update Data')">
            
    </form>
     
<?php

if(isset($_POST['update'])){
    $Name=$_POST['productname'];
    $Price=$_POST['price'];
    $update="update product set Name='$Name',Price='$Price' where id='$Id'";
    $query=mysqli_query($con,$update);
    if($query){
        //echo "<script>alert('Updated Successfully')</script>";
        header('location:CRUD.php');
    }
    else{
        echo "<script>alert('Try Again')</script>";
    }
}
?>

