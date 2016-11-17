<?php
include("connection.php");
session_start();
date_default_timezone_set('Asia/Calcutta');
$table=$_SESSION['table'];
$sql = "UPDATE `madhuban`.`$table` SET `submit flag` = '1'";
$q=mysql_query($sql);
$date = date('Y-m-d H:i:s');
$sql1 = "select * from time";
$q1=mysql_query($sql1);
while($row=mysql_fetch_array($q1))
{
	if($table==$row[0])
	{
		$sql = "UPDATE `madhuban`.`time` SET `time` = \'2013-12-21 16:44:19\' WHERE `time`.`tname` = \'table2\' LIMIT 1;";
	}
}
$sql2 = "INSERT INTO `madhuban`.`time` (`tname`, `time`, `dflag`, `qflag`) VALUES ('$table', '$date', '0', '0');";

if($q)
{
header('Location: menu_order.php');	
}
else
{
	echo "fail";
}

?>
