<?php
include('connection.php');
session_start();
$sql = "SELECT * FROM `billno`";
$q=mysql_query($sql);

$table=$_POST['submit'];
$_SESSION['table']=$table;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome To Madhubhan</title>
<link href="../css/design.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="container">


<div id="taketour" >
<a href="../pano/360-swiming-pool.swf">
<img src="../img/taketour.png" /></a>
</div>

<div id="restaurant">
<a href="restaurant.php">
<img src="../img/Restaurant.png" />
</a>
</div>

</div>
</body>
</html>

