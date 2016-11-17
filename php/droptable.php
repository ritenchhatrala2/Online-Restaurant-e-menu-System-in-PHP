<?php
include('connection.php');
session_start();
$billno=$_SESSION['billno'];
$table=$_POST['table'];
$sql="select * from $table";
$q=mysql_query($sql);

while($row=mysql_fetch_array($q))
{
$sql1 = "INSERT INTO `madhuban`.`maintable` (`srno`, `name`, `quantity`, `rate`, `total`, `bill_no`, `time`, `date`, `jain`, `spicy`,`any specification`, `submit flag`, `discharge flag`, `category`) VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]', '$billno', '$row[6]', '$row[7]', '$row[8]', '$row[9]', '$row[10]', '$row[11]', '$row[12]', '$row[13]');";
$q1=mysql_query($sql1);
}
if($q1)
{
$sql2 = "DROP TABLE `$table`";
$q2=mysql_query($sql2);
}
if($q2)
{
	$sql = "DELETE FROM `madhuban`.`time` WHERE `time`.`tname` = '$table';";
	mysql_query($sql);
}
if($q2)
{
	header('Location: menu.php');
}
else
{
	echo "fail";
}
?>