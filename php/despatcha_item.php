<?php
include("connection.php");
session_start();
$item=$_GET['item'];
$table=$_GET['table'];

$sql = "UPDATE `madhuban`.`$table` SET `discharge flag` = '1' WHERE `$table`.`discharge flag` = 0 AND `table1`.`name` = '$item'";
$q=mysql_query($sql);
if($q)
{
header('Location: kitchen_display.php');	
}
else
{
	echo "fail";
}
?>


