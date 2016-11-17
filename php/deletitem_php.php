<?php 
include("connection.php");
session_start();
$table=$_SESSION['table'];
$item=$_GET['item'];
$sql = "DELETE FROM `madhuban`.`$table` WHERE `$table`.`name` = '$item'";
$q=mysql_query($sql);
if($q)
{
header('Location: menu_order.php');	
}
else
{
	echo "fail";
}

?>