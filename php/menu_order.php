<?php
include('connection.php');
session_start();
$table=$_SESSION['table'];
$create="CREATE TABLE IF NOT EXISTS `$table` (
  `srno` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `rate` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `time`time NOT NULL,
  `date` date NOT NULL,
  `jain` varchar(10) NOT NULL,
  `spicy` varchar(10) NOT NULL,
  `any specification` varchar(500) NOT NULL,
  `submit flag` int(10) NOT NULL,
  `discharge flag` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
$tcreate=mysql_query($create);

if($_GET['punjabi']=="punjabi")
$category=$_GET['punjabi'];
else if($_GET['chinese']=="chinese")
$category=$_GET['chinese'];
else if($_GET['si']=="si")
$category="south_indian";
else
$category=$_SESSION['ct'];
$_SESSION['ct']=$category;
$sql = "SELECT * FROM `$category`";
$sql1 = "SELECT * FROM `$table`";
$item=mysql_query($sql);
$q=mysql_query($sql1);
$r=mysql_num_rows($item);
$r1=mysql_num_rows($q);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAGE 4</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container_mini">

<div id="box4_1">
<ul>


<li id="lli"><a href="#" class="myButton">PUNJABI</a></li>
<li id="lli" style="padding:16px" ><a href="#" class="myButton">CHINESE</a></li>
<li id="lli" style="padding:16px"><a href="#" class="myButton">MEXICAN</a></li>
<li id="lli" style="padding:16px"><a href="#" class="myButton">GUJRATI</a></li>
<li id="lli" style="padding:16px"><a href="#" class="myButton">ITALIAN</a></li>
<li id="lli" style="padding:16px"><a href="#" class="myButton">THAI</a></li>
</ul>

</div>

<div id="box4_3">
<div id="box5_2">
<?php
echo "<table width='480' bgcolor='#000000'>
<tr>
<th width='365' height='40'>Item Name</th>
<th width='60' height='40'>Rate</th>
<th width='40' height='40'>Add</th>
</tr>
</table>";
?>
</div>
<div id="box5_1">
<?php
$rit=200;
echo "<table width='480' bgcolor='#000000'>";
	if($r>0)
	{
		while($row=mysql_fetch_array($item))
		{
			$no=0;
			echo "<tr>
			<td width='380' height='75'>$row[1]</td>
			<td width='60' height='75'>$row[5]</td>
			<td width='40' height='75'>";
			
         /* <button onclick="setVar('<?php// echo $row[1] ?>')">ADD</button>
        <input type="hidden" id="<?php echo ''.$rit?>" value="<?php echo $row[1] ?>" /> <input type="button" value="<?php echo $row[1] ?>" id="<?php echo $row[0]?>" /> */
    
			echo "<a href='spec.php?item=$row[1]'>ADD</a></td>
			
			</tr>";
			//$rit=$rit+1;
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>
</div>
</div>

<div id="box4_2">
<div id="box5_3">

<?php
echo "<table height='320'>
	<tr>
		<th width='200' height='35'>Item Name</th>
		<th width='40' height='35'>Qty</th>
		<th width='60' height='35'>Delete</th>
		
	</tr>";
	

		while($row1=mysql_fetch_array($q))
		{
			echo "<center><tr>
			<td>$row1[1]</td>
			<td>$row1[2]</td>"; 
			if($row1[11]=='1')
			{
				echo "<td></td>";
			}
			else
			{
				echo "<td><a href='deletitem_php.php?item=$row1[1]'>DELETE</a></td>";
			}
			echo"
			</tr></center>";
		}
			
	
	echo "</table>";
?>
</div>
<div id="box5_4">
<center><a href="conform_order.php" class="myButton1">Confirm Order</a></center>
</div>

</div>

</div>

</body>
</html>
