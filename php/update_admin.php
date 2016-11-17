<?php
include("connection.php");
session_start();
$table=$_GET['table'];
$item=$_GET['item'];
$sql = "SELECT * FROM `$table` where name='$item'";
$q=mysql_query($sql);
$row=mysql_fetch_array($q);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function subtractQty(){
if(document.getElementById("qty").value - 1 < 0)
return;
else
document.getElementById("qty").value--;
}
</script>

</head>

<body>
<div id="container_mini_page5">
<br/>
<center><h1>Update Order</h1>
<form action="specification_php_update.php" method="post">
<input type="hidden" name="table" value="<?php echo $table ?>" />
<input type="hidden" name="item" value="<?php echo $item ?>" />
<table width="387" border="1">

<tr>
<td width="140" height="40">NAME</td>
<td width="231">
<?php echo $item;?></td>
</tr>

<tr>
<td height="40">QUANTITY</td>
<td><input type='button' name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'/>
<input type='text' name='quantity' id='qty' />
<input type='button' name='subtract' onclick='javascript: subtractQty();' value='-'/>
</td>
</tr>
</table>
<br/>
<input type="submit" value="Submit" class="myButton1"/>
</form>

</center>
</div>
</body>
</html>