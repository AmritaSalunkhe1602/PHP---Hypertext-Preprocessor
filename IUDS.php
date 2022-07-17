<?php
$sname="localhost";
$uname="root";
$password="";
$db="idus";
$id="";
$fname="";
$lname="";
$address="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect=mysqli_connect($sname,$uname,$password,$db);}
    catch(Exeption $ex){echo 'Error';}function getPosts()
{ $posts=array();
    $posts[0]=$_POST['id'];
    $posts[1]=$_POST['fname'];
    $posts[2]=$_POST['lname'];
    $posts[3]=$_POST['address'];
    return $posts;
}//search
if(isset($_POST['search'])){
$data=getPosts();
$search_Query="SELECT * FROM iuds WHERE id=$data[0]";
$search_Result=mysqli_query($connect,$search_Query);
if($search_Result){
    if(mysqli_num_rows($search_Result)){
        while($row=mysqli_fetch_array($search_Result)){
            $id=$row['id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $address=$row['address'];
        }}else{echo 'No Data For This Id';
    }}else{echo 'Result Error';}}
if (isset($_POST['insert'])){
    $data=getPosts();
    $insert_Query="INSERT INTO `iuds`( `fname`, `lname`, `address`) VALUES ('$data[1]','$data[2]','$data[3]')";
    try{
        $insert_Result=mysqli_query($connect,$insert_Query);
        if($insert_Result)
        {
           if(mysqli_affected_rows($connect)>0){
               echo 'Data Inserted';
           }else{
               echo 'Data not Inserted';
           }
        }
    }catch(Exception $ex){
        echo  'Error Insert'.$ex->getMessage();
    }
}
if (isset($_POST['delete'])){
    $data=getPosts();
    $delete_Query="DELETE  FROM `iuds` WHERE `id` = $data[0]";
    try{
        $delete_Result=mysqli_query($connect,$delete_Query);
        if($delete_Result)
        {
           if(mysqli_affected_rows($connect)>0){
               echo 'Data Deleted';
           }else{
               echo 'Data not Deleted';
           }
        }
    }catch(Exception $ex){
        echo  'Error Delete'.$ex->getMessage();
    }
}
if (isset($_POST['update'])){
    $data=getPosts();
    $update_Query="UPDATE `iuds` SET `fname`='$data[1]',`lname`='$data[2]',`address`='$data[3]' WHERE `id`=$data[0]";
    try{
        $update_Result=mysqli_query($connect,$update_Query);
        if($update_Result)
        {
           if(mysqli_affected_rows($connect)>0){
               echo 'Data Updated';
           }else{
               echo 'Data not Updated';
           }
        }
    }catch(Exception $ex){
        echo  'Error Update'.$ex->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Insert Update Delete Search </title>
</head>
<body>
    <form action="IUDS.php" method="post">
        <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
        <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"><br><br>
        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"><br><br>
        <input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"><br><br>
        <div>
        <input type="submit" name="insert" value="Add">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="search" value="Find"> 
        </div>
    </form>
</body>
</html>