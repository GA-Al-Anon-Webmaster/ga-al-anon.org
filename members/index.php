<?php
// Index - Members Login Page
session_start(); 

if (isset($_POST["passwd"]))
{
	$sanitized_passwd =  strtolower(strip_tags(trim($_POST["passwd"]))) ;
	// this is the main password checking "if" statement. Put whatever code you want here.
	if (substr($sanitized_passwd,-3) == "afg")
	{
		$_SESSION['views']=$_SESSION['views']+1;
		
		if(isset($_SESSION['return'])){
			header( 'Location: '.$_SESSION['return'] ) ;
		}else {
			// put the URI of the Main Members Page here
			header( 'Location: http://www.ga-al-anon.org/members/memberswelcome.php' ) ;			
		}

	
	}
}
// BTW, it's important that there is no space between the end of the PHP block and the DocType element
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">  
<title>GA Al-Anon/Alateen Members Area</title>

<body>

<?php
if (isset($_POST["passwd"])) {
	echo "<h2>Sorry - Invalid log-in. Please enter your group name followed by afg into the textbox.</h2>" ;
}

?>
<!-- Ask for Password - give a hint as to what to fill in here -->
<H1>Al-Anon Members Area</H1>
You have reached the Georgia Area Al-Anon / Alateen Members site. <br>
This is a password protected site for Al-Anon and Alateen members.<br>
Please enter the name of your home group followed by "afg" in the<br>
password box. Make sure you click the button. Do not press enter on<br>
your keyboard.<br>
<br>

<form name="form1"  action="index.php" method="post">
		<font face="Arial" color="#0000a0"><strong>Password:</strong></font>
		<!--<input name="password1" type="password">-->
		<input id="password1" name="passwd" type="text">
		<input type="submit" value="Submit"> 
</form>


</body>
</html>