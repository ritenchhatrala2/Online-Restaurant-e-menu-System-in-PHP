<?php
include("connection.php");
error_reporting(0);
session_start();
$sql = "SELECT * FROM `time` ORDER BY `time`.`time` DESC;";
$q=mysql_query($sql);
$r=mysql_num_rows($q);
$array=array();
$des=array();
$i=0;
while($row=mysql_fetch_array($q))
{
	$array[$i]=$row[0];
	$des[$i]=$row[2];
	$i++;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
/*$j=0;
$arrlength=count($array);

for($x=0;$x<$arrlength;$x++)
  {
  echo $array[$x];
  echo "<br>";
  }
*/
?>
<?php
$arrlength=count($array);

for($x=0;$x<$arrlength;$x++)
  {

$tb=$array[$x];
$sql1= "SELECT * FROM `$tb`";
$q1=mysql_query($sql1);

if($des[$x]=='0')
{
echo "<center>$tb

<table border=1 height='100'>
	<tr bgcolor='#99FF33'>
		<th>Item Name</th>
		<th>Qty</th>
		<th>Jain</th>
		<th>Spicy</th>
		<th>Any Specification</th>
		<th>Despatch</th>
	</tr>";
}
	if($des[$x]=='0')
	{
		while($row1=mysql_fetch_array($q1))
		{
			if($row1[12]=='0')
			{
			echo "<tr bgcolor='#FFFFCC'>
			<td>$row1[1]</td>
			<td>$row1[2]</td>
			<td>$row1[8]</td>
			<td>$row1[9]</td>
			<td>$row1[10]</td>
			<td><a href='despatcha_item.php?item=$row1[1]&table=$tb'>Deapatch</a>			            </td> 			
			</tr>";
			}
		}

	
	
	echo "</table></center>";
	echo "<center><form action='despatcha_all.php' method='post'>
	<input type='hidden' name='table' value='$tb'>
<input type='submit' value='Despatch_All' />
</form></center><br>";
	}
  }
?>

</body>
</html>