<?php
include("connection.php");
session_start();
$table=$_SESSION['table'];
$sql = "SELECT * FROM `$table`";
$q=mysql_query($sql);
$r1=mysql_num_rows($q);
?>
<html>
<head>
<title>riten</title>
<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
<script>
function myFunction()
{
window.print();
}
</script>
</head>
<body>
<?php
echo "<center><table border=1 height='100'>
	<tr bgcolor='#99FF33'>
		<th>Item Name</th>
		<th>Qty</th>
		<th>Rate</th>
		<th>Total</th>
		<th>Jain</th>
		<th>Spicy</th>
		<th>Any Specification</th>
	</tr>";
	
	if($r1>0)
	{
		while($row=mysql_fetch_array($q))
		{
			echo "<tr bgcolor='#FFFFCC'>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[8]</td>
			<td>$row[9]</td>
			<td>$row[10]</td> 
			
			</tr>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table></center>";
?>
<form action="submit.php">
<input type="submit" value="Submit Order" />
</form>
<button onclick="myFunction()">Print this page</button>
</body>
</html>