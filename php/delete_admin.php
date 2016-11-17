<?php 
include("connection.php");
session_start();
$table=$_GET['table'];
$item=$_GET['item'];
$sql = "DELETE FROM `madhuban`.`$table` WHERE `$table`.`name` = '$item'";
$url="update_order.php?table=".$table;
$q=mysql_query($sql);
if($q)
{
	//include("update_ordre.php");
header('Location:'.$url.'');	
}
else
{
	echo "fail";
}

?>