<?php
include("connection.php");
session_start();
$item=$_POST['item'];
$table=$_POST['table'];
$qunt=$_POST['quantity'];
$spicy=$_POST['spicy'];
$jain=$_POST['jain'];
$spec=$_POST['specification'];
$ct=$_SESSION['ct'];
$sql = "UPDATE `madhuban`.`$table` SET `quantity` = '$qunt' WHERE  `$table`.`name` = '$item';";
$q1=mysql_query($sql);
$url="update_order.php?table=".$table;

if($q1)
{
header('Location:'.$url.'');	
}
else
{
	echo "fail";
}
?>