<?php
include('connection.php');
session_start();
$sql = "SELECT * FROM `time`;";
$q=mysql_query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/design.css" rel="stylesheet" type="text/css" />

<title>8th Page</title>
</head>

<body>

<div id="container_mini_page5">
<br />
<center><h1>Print The Bill of Table</h1>
</center>
<div class="print_tab">
  <?php	
		while($row=mysql_fetch_array($q))
		{
			 echo "<a href='print_order.php?table=$row[0]'
			 class='myButton'>$row[0]</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
?>
</div>
</div>


</body>
</html>

