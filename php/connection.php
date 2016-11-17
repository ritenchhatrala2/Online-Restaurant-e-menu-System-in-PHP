<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		echo "<br> could not connect";
	}
	else
	{
		$db=mysql_select_db("madhuban");
		if(!$db)
		{
			echo "<br> db not selected";
			$q=mysql_query("create database madhuban");
			if(!$q)
			{
				echo "<br> db not created.";
			}
		}
	}
?>