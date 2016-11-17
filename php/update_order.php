<?php
include("connection.php");
session_start();
$table=$_GET['table'];
$sql = "SELECT * FROM `$table`";
$q=mysql_query($sql);
$r1=mysql_num_rows($q);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 6</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container_mini_page5">
<br/>
<center><h1>Update Order</h1></center>

<?php

	echo "<center><table width='700' border='1'>
		<tr>
		<th width='166' height='25'>Item Name</th>
		<th width='20' height='25'>Qty</th>
		<th width='20' height='25'>Rate</th>
		<th width='20' height='25'>Total</th>
		<th width='20' height='25'>Jain</th>
		<th width='30' height='25'>Spicy</th>
		<th width='166' height='25'>Any Specification</th>
		<th width='30' height='25'>Update</th>
		<th width='30' height='25'>Delete</th>
		</tr>";
	
	
		if($r1>0)
	{
		while($row=mysql_fetch_array($q))
		{
			echo "<tr>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[8]</td>
			<td>$row[9]</td>
			<td>$row[10]</td> 
			<td><a href='update_admin.php?table=$table&item=$row[1]'>Update</a></td>
			<td><a href='delete_admin.php?table=$table&item=$row[1]'>Delete</a></td>
			</tr>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table></center>";
?>
<br/>
<center><a href="menu.php" class="myButton1">OK</a></center>
   
    <br/>
</div>
</div>
</body>
</html>