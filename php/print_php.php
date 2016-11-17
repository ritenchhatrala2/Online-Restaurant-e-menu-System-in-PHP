<?php
include('connection.php');
session_start();
$table=$_GET['table'];
$sql="select * from $table";
$q=mysql_query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

</head>

<body>
<form id="form1" runat="server">
    <div id="printablediv">
<?php
	echo "<center><table height='100'>
		<tr bgcolor='#99FF33'>
		<th>Item Name</th>
		<th>Qty</th>
		<th>Rate</th>
		<th>Total</th>
		<th>Jain</th>
		<th>Spicy</th>
		<th>Any Specification</th>
		</tr>";
	
	
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
	echo "</table></center>";
?>

    </div>
    <div id="donotprintdiv">
        I am not going to print
    </div>
    <input type="button" value="Print the bill" onclick="javascript:printDiv('printablediv')" />
    </form>
    <form action="droptable.php" method="post">
    <input type="hidden" name="table" value="<?php echo $table?>" />
    <input type="submit" value="Finish" />
    </form>
</body>
</html>