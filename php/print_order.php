<?php
include("connection.php");
session_start();
$table=$_GET['table'];
date_default_timezone_set('Asia/Calcutta');
$sql = "SELECT * FROM `$table`";
$q=mysql_query($sql);
$billno="SELECT * FROM billno ORDER BY billno DESC LIMIT 1;";
$bill=mysql_query($billno);
$billrow=mysql_fetch_row($bill);
$_SESSION['billno']=$billrow[0];
$next=$billrow[0]+1;
$date = date('Y-m-d');

$billinsert = "INSERT INTO `madhuban`.`billno` (`billno`, `date`, `amount`, `discount`) VALUES ('$next', '$date', '', '');";
$billins=mysql_query($billinsert);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 6</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />
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
<div id="container_mini_page5">
<br/>
<center><h1>Print Bill</h1></center>

<form id="form1" runat="server">
    <div id="printablediv" class="printbill">


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
		</tr>";
	
	
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
			</tr>";
		}
	echo "</table></center>";
?>

   
    <br/>
    
 <input type="button" value="Print the bill" onclick="javascript:printDiv('printablediv')"  class="myButton1"/>
    </form>
    <form action="droptable.php" method="post">
    <input type="hidden" name="table" value="<?php echo $table?>" />
    <input type="submit" value="Finish" class="myButton1"/>
    </form>
</div>

</div>

</body>
</html>
