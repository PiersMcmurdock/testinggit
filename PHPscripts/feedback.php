<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<link rel="stylesheet" type="text/css" href= "widestyle.css" id="style" title="style"/>
			<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="jquery-1.7.2.js"> </script>
	
		
		<title>
		My homepage 
		</title>
		
		
		</head>

	<body>
<?php 

include 'database_conn.php';

$name = $_POST ['text'];
$feedback = $_POST ['feedback'];


$query = $query = "INSERT INTO webby.feedbacktab( name, feedback, Date) VALUES ('$name', '$feedback', NOW())";


mysql_real_escape_string($query);

mysql_query($query) or die (mysql_error());

echo "Thank you for your feedback. <br/> Please <a href=\"feedbackhome.php\">click here </a> to go back to the feedback page."

?>

</body>
</html>