<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<link rel="stylesheet" type="text/css" href= "styles/widestyle.css" id="style" title="style"/>
		<link rel="stylesheet" type="text/css" href= "styles/widestyle981.css" media="screen and (min-width: 982px)" />
		<link rel="stylesheet" type="text/css" href= "styles/widestyle801.css" media="screen and (min-width: 801px) and (max-width: 981px)" />
		<link rel="stylesheet" type="text/css" href= "styles/widestyle641.css" media="screen and (max-width: 800px) and (min-width: 641px)"/>
		<link rel="stylesheet" type="text/css" href= "styles/widestyle640.css" media="screen and (max-width: 640px)" />
			<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>

		
			<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="jscript/jquery-1.11.1.js"> </script>
		<script type="text/javascript" src="jscript/jquery-ui-1.10.4.js"> </script>
		<script type="text/javascript" src="jscript/multibuttonclick.js"> </script>
		<script type="text/javascript" src="jscript/imagereplace.js"> </script>
		<script src="http://malsup.github.com/jquery.form.js"></script> 
		
		<title>
		My homepage 
		</title>
		
		
		</head>

	<body>
		<script type="text/javascript">	
		


 		
		
	$(document).ready(function() {
    $('#list').load('PHPscripts/feedbackdisplay.php');
	
/*	
$('.sh').multiButtonClick({area: '.linkcontainer' ,speed: 'fast', tog: 'next'}) ;
$('.sh').multiButtonClick({area: '.firstpara' ,speed: 'fast', tog:'parent'});	
$('.sh').multiButtonClick({area: '#myForm', speed: 'fast', tog:'parent'});	
$('.sh').multiButtonClick({area: 'h2', speed: 'slow', tog:'basic'});	
*/	

$('.sh').multiButtonClick({area: ['.linkcontainer', 'myForm' , '#nav'] ,speed: 'fast', tog: 'parent'}) ;
	
	 var options = { 
            target: '#list', 
            url: 'PHPscripts/feedback.php', 
            success: function() { 
                $('#list').load('PHPscripts/feedbackdisplay.php');
				$('#complete').html("your feedback has been submitted");
				setTimeout(function () {
				$('#complete').hide();
				},5000);
            } 
        }; 

        
        $('#myForm').ajaxForm(options);
	
		$( "#main" ).sortable({ cursor: "pointer" });	
			
			
			
			
}); 

function disablebtn()
{
var btn = document.getElementById("sub").disabled=true;
var name = document.getElementById("text");
var feedback = document.getElementById("feedback");

}
 

		</script>
	
	<div id="main">

		<div id="nav">
	<span class="linkcontainer"><a href="index.html"><img src="images/home.png" alt="home"  class="nav_image" id="home"/></a></span>
			<span class="linkcontainer"><a href="pierscv.html"><img src="images/mycv.png" alt="my cv" class="nav_image" id="mycv" /></a></span>
			<span class="linkcontainer"><a href="knowledgebase.html"><img src="images/knowledge.png" alt="knowledgebase "class="nav_image" id="knowledge" /></a></span>
			<span class="linkcontainer"><a href="feedbackhome.php"><img src="images/feedback.png" alt="feedback" class="nav_image" id="feedback" /></a></span>
			<a class="linkcontainer" href="contact.html"><img src="images/contact.png" alt="contact" class="nav_image" id="contact" /></a>
		</div>
		<h1>Feedback </h1> 
		<div class="set" id="test">
		<h2 class="firstsection">Introduction</h2>
		
		
		<p class="firstpara">
		This page will allow you to give feedback on the website.
		Please feel free to let me know what is good, not so good and 
		what can be improved upon on this site.
		</p>
		</div>
		<div class="set">
		<h2>Feedback form<button class="sh">show/hide </button></h2>
		<p class="firstpara">
		Please complete the form below to provide your feedback.
		
		</p>
		
		<form action="PHPscripts/feedback.php" method="post" id="myForm" >
		
		
			Enter Name: <span style="position:relative; left:20px;"><input type="text" id="text" name="text"/> </span><br/><br/>
			Enter feedback: <textarea id="feedback" name="feedback"> Enter Feedback here </textarea> 
		
	
		
	<input type="submit" value="Submit" id="sub" onload="disablebtn()"/>
		</form>
		
		<p id="complete"> </p>
		</div>
		<div class="set">
		<script type="text/javascript">
		

		</script>
		<h2>Feedback<button class="sh">show/hide </button></h2>
		<div id="list" >
		
		</div>
		</div>
	</div>
	</body>
</html>