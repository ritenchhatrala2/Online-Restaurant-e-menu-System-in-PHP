<?php
include('connection.php');
$login = mysql_query("SELECT * FROM login WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");

	if(mysql_num_rows($login)==1)
	{
		 session_start();
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];

         header('Location: menu.php');	
	}
	else
	{
 		echo "";
	}



?>