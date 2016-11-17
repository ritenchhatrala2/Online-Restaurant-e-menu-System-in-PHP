<?php
include("connection.php");
session_start();
date_default_timezone_set('Asia/Calcutta');
$item=$_POST['item'];
$qunt=$_POST['qty'];
$spicy=$_POST['spicy'];
$jain=$_POST['jain'];
$spec=$_POST['specification'];
$ct=$_SESSION['ct'];
$table=$_SESSION['table'];
$sql1 = "SELECT * FROM `$ct` where name='$item'";
$q=mysql_query($sql1);
$row=mysql_fetch_array($q);
$total=$qunt*$row[5];
$date = date('Y-m-d');
$time = date('H:i:s');
$sql = "INSERT INTO `madhuban`.`$table` (`name`, `quantity`, `rate`, `total`, `bill_no`, `time`, `date`, `jain`, `spicy`, `any specification`, `submit flag`, `discharge flag`, `category`) VALUES ('$item', '$qunt', '$row[5]', '$total', '', '$time', '$date', '$jain', '$spicy', '$spec','0', '0', '$row[3]');";
$q1=mysql_query($sql);
if($q1)
{
header('Location: menu_order.php');	
}
else
{
	echo "fail";
}
?>