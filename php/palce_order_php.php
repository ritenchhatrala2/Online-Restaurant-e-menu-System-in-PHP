<?php
include('connection.php');
session_start();
$table=$_SESSION['table'];
$itm="";

if($_POST['punjabi']=="punjabi")
$category=$_POST['punjabi'];
else if($_POST['chinese']=="chinese")
$category=$_POST['chinese'];
else if($_POST['si']=="si")
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
<title>Untitled Document</title>
	<link rel="stylesheet" href="../Assets/LightFace.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools.js"></script>
	<script src="../js/LightFace.js"></script>
	<script src="../js/LightFace.js"></script>
	<script src="../js/LightFace.IFrame.js"></script>
	<script src="../js/LightFace.Image.js"></script>
	<script src="../js/LightFace.Request.js"></script>
	<script>
	var i=0;
	var rit=200;
	var no=<?php echo $r?>
	
		window.addEvent('domready',function(){
			for(i=1;i<=no;i++)
			{
			
			document.id(""+i).addEvent('click',function(){
				
				ajaxFace = new LightFace.Request({
					url: 'ajax.php',
					buttons: [
						{ title: ''+rit, event: function() { alert('hi!'); }, color: 'blue' },
						{ title: 'Canceler', event: function() { this.close(); } }
					],
					request: { 
						data: { 
							name: document.id(""+rit).value || 'PersonWhoIsTooCoolToGiveTheirName' 
						},
						method: 'post'
					},
					title: 'AJAX Demo'
				}).open();
				
			});
			
			}
		});
	
	</script>

	
		        
</head>

<body>

<?php

$rit=200;
echo "<center><table border=1 height='100'>
	<tr bgcolor='#99FF33'>
		<th>Sr no</th>
		<th>Item Name</th>
		<th>Rate</th>
		<th>Add Item</th>
		
	</tr></center>";
	
	if($r>0)
	{
		while($row=mysql_fetch_array($item))
		{
			$no=0;
			echo "<center><tr bgcolor='#FFFFCC'>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[5]</td>
			<td>";
         /* <button onclick="setVar('<?php// echo $row[1] ?>')">ADD</button>
        <input type="hidden" id="<?php echo ''.$rit?>" value="<?php echo $row[1] ?>" /> <input type="button" value="<?php echo $row[1] ?>" id="<?php echo $row[0]?>" /> */
    
			echo "<a href='specification.php?item=$row[1]'>ADD</a></td>
			
			</tr></center>";
			//$rit=$rit+1;
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>
<?php
echo "<center><table border=1 height='100'>
	<tr bgcolor='#99FF33'>
		<th>Item Name</th>
		<th>quantity</th>
		<th>delete</th>
		
	</tr></center>";
	
	if($r1>0)
	{
		while($row1=mysql_fetch_array($q))
		{
			echo "<center><tr bgcolor='#FFFFCC'>
			<td>$row1[1]</td>
			<td>$row1[2]</td>"; 
			if($row1[11]=='1')
			{
				echo "<td></td>";
			}
			else
			{
				echo "<td><a href='deletitem_php.php?item=$row1[1]'>DELET</a></td>";
			}
			echo"
			</tr></center>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>
<form action="conform.php">
<input type="submit" value="Conform Order" />
</form>
</body>
</html>