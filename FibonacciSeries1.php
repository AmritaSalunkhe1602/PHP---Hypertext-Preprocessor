<html>
    <body>
        <form  method="post">
            <input type="text" name="number" required><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
<?php
//Fibonacci Series is defined as in which we get next term by adding previous two terms.
if(isset($_POST['submit'])){
    $n1=0;
    $n2=1;
    $nextnum=0;
    for($i=0;$i<=$_POST['number'];$i++){
        echo $n1;
        $n1=$n1+$n2;
        $n2=$nextnum;
        $nextnum=$n1;
    }
}
?>