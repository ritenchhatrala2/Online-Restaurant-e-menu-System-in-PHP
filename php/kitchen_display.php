<?php
include("connection.php");
error_reporting(0);
session_start();
$sql = "SELECT * FROM `time` ORDER BY `time`.`time` ASC;";
$q=mysql_query($sql);
$r=mysql_num_rows($q);
$array=array();
$des=array();
$i=0;
while($row=mysql_fetch_array($q))
{
	if($row[2]=='0')
	{
	$array[$i]=$row[0];
	$i++;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="10" >
<title>Page 3</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="container_mini_dis">

<div id="box11_1" style="display:inline-block">

<?php
$arrlength=count($array);
echo "<table><tr>";

for($x=0;$x<$arrlength;$x++)
  {

$tb=$array[$x];
$sql1= "SELECT * FROM `$tb`";
$q1=mysql_query($sql1);

echo "<td style='padding:4px'>";
echo $tb.
'<br/>';
echo "<table border=1 height='100' style='dispay:inline-block'>
	<tr>
		<th>Item Name</th>
		<th>Qty</th>
		<th>Jain</th>
		<th>Spicy</th>
		<th>Any Specification</th>
		<th>Despatch</th>
	</tr>";

	
		while($row1=mysql_fetch_array($q1))
		{
			if($row1[12]=='0')
			{
			echo "<tr>
			<td>$row1[1]</td>
			<td>$row1[2]</td>
			<td>$row1[8]</td>
			<td>$row1[9]</td>
			<td>$row1[10]</td>
			<td><a href='despatcha_item.php?item=$row1[1]&table=$tb'>Deapatch</a></td> 			
			</tr>";
			}
		}

	
	
	echo "</table>";
	echo "<center><form action='despatcha_all.php' method='post'>
	<input type='hidden' name='table' value='$tb'>
<input type='submit' value='Despatch_All' />
</form></center></td>";
	}

echo "</tr></table>";
  
?>

</div>

<div id="box11_2">

</div>

</div>

</body>
</html>
