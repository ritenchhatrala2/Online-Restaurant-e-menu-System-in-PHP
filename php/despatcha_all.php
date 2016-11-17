<?php
include("connection.php");
session_start();
$table=$_POST['table'];

$sql = "UPDATE `madhuban`.`time` SET `dflag` = '1' WHERE `time`.`tname` = '$table'";
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
