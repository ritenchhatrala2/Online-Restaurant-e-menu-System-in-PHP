<?php
$item=$_GET['item'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page 5</title>
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

<div id="box6_1">
<center><h1>SPECIFICATIONS</h1></center>
<form action="specification_php.php" method="post">
<input type="hidden" name="item" value="<?php echo $item ?>" />
<table width="387" border="1">

<tr>
<td width="166" height="40">NAME</td>
<td width="167">
<?php echo $item;?></td>
</tr>



<tr>
<td height="40">QUANTITY</td>
<td><input type='button' name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'/>
<input type='text' name='qty' id='qty' />
<input type='button' name='subtract' onclick='javascript: subtractQty();' value='-'/>
</td>
</tr>


<tr>
<td height="40">SPICY</td>
<td >&nbsp;&nbsp;&nbsp;&nbsp;<img src="../img/spicy.png"/><input type="radio" name="ip1"/>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../img/spicy.png"/><img src="../img/spicy.png"/><input type="radio" name="ip1" />&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../img/spicy.png"/><img src="../img/spicy.png"/><img src="../img/spicy.png"/><input type="radio" name="ip1" /></td>

</tr>

<tr>
<td height="40">JAIN</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cb1"/></td>
</tr>

<tr>
<td height="40">ANY SPECIFICATIONS</td>
<td><textarea name="as" rows="3" cols="25" id="ta1" autofocus="autofocus"></textarea></td>
</tr>


</table>
</br>

<center><input type="submit" value="Submit" class="myButton1"/>
<a href="menu_order.php" class="myButton1">Cancel</a></center>

</form>
</div>

</div>

</body>
</html>
