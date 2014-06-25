<?php
		include 'database_conn.php';
		
		$sql="select * FROM feedbacktab ORDER BY Date DESC";
		
		$queryresult = mysql_query($sql) or die(mysql_error());
		
		
		while($row = mysql_fetch_assoc($queryresult))
	{
		$name = $row['name'];
		$feedback = $row['feedback'];
		$date = $row['Date'];
		
		 $name = mysql_real_escape_string($name);
		 $feedback = mysql_real_escape_string($feedback);
		 $date = mysql_real_escape_string($date);
		
		$timestamp = strtotime($date);
		$mydate = date('d-m-Y H:i:s', $timestamp);
		
		$result = "<table><tr><th> Name: ".$name."</th>"."<th style=\"text-decoration:none;\">".$mydate."</th>"."</tr>"."<tr><td><br/><br/>feedback: ".$feedback."</td></tr></table><br/>";
		
		
		echo $result;
	}
		?>