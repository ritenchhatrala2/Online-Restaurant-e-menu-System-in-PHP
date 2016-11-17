<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$item=$_GET['item'];
?>
Name:<?php echo $item;?><br />
<br />
<form action="specification_php.php" method="post">
<input type="hidden" name="item" value="<?php echo $item ?>" />
Quantity:<select name="quantity" >
<option> 1 </option>
<option> 2 </option>
<option> 3 </option>
<option> 4 </option>
<option> 5 </option>
</select>
<br />
Spicy: &nbsp;&nbsp;&nbsp;&nbsp;1<input type="checkbox" name="spicy" value="1" />
&nbsp;&nbsp;&nbsp;&nbsp;2<input type="checkbox" name="spicy" value="2" />
&nbsp;&nbsp;&nbsp;&nbsp;3<input type="checkbox" name="spicy" value="3" />
<br />
Jain:
<input type="checkbox" name="jain" value="Jain" />
<br />
Any specification: <textarea name="specification" rows="3" cols="20"></textarea><br />
<input type="submit" value="submit"/>
</body>
</html>