<?php
$conn = mysql_connect ('127.0.0.1','root','ski4life') 
	or die("Could Not Connect to MySQL!");
	mysql_select_db("webby")
	or die("Could Not Open Database:".mysql_error());


?>