<table align="center" border='1' width="100%">
<?php
$num = 20;
for($i = 1; $i <= 10; $i++)
{	    echo "<tr >";
	for($j =1; $j <= $num; $j++)
	{	$product = ($i * $j);
		echo "<td >$product</td> ";
	}echo "<tr/>";
}
?>
</table>
