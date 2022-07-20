<?php
$con=mysqli_connect("localhost","root","","php");
if(isset($_POST['save']))
{
    $Name=$_POST['productname'];
    $Price=$_POST['price'];
    $sql="insert into product(Name,Price) values('$Name',$Price)";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        echo "<script>alert('saved successsfully!')</script>";
    }
    else{
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
</head>
<body>
       <center>
      <form action="" method="post">
       <label for="product">Product Name:</label>
        <input type="text" name="productname" id="product"><br><br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price"><br><br>
        <input type="submit" value="Insert" name="save">
        
    </form>
  
    <table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
        $sql="select * from product";
        $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
           while($res=mysqli_fetch_array($query))
           {
            ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['Name']?></td>
                <td><?php echo $res['Price']?></td>
                <td><a href="Update.php?id=<?php echo $res['id']; ?>">Update</a></td>
                <td><a onclick="return confirm('Are you sure,you want to delete?')" href="Delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
            </tr>
            <?php
           }
        }
        else{
            ?>
            <tr>
                <td colspan="3"><?php echo "No Record Found" ?></td>
            </tr>
            <?php
        }
    ?>
</table>
      
   </center>
</body>
</html>

