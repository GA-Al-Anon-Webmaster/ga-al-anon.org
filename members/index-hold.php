<?php
// Index - Members Login Page
session_start(); 

	$_SESSION['views']=$_SESSION['views']+1;

?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"> 


<script language="JavaScript">

function LogIn(){
password="";
return_URI="<?php echo $_SESSION['return']?>";
password=document.form1.password1.value.toLowerCase();
password=password.substring(password.length-3);
if (password=="afg"){
//	window.location='memberswelcome.html'
	if (return_URI=="")
	{
// 			alert("no return_URI set");
//		location.href=return_URI;
		location.href="memberswelcome.php";
	}
	else
	{
		location.href=return_URI;

	}
}
else{
alert("Invalid log-in. Please enter your group name followed by afg into the textbox. Also, please make sure you click the button, do not press enter on your keyboard.");
window.form1.password1.value="";
}
}
function searchKeyPress(e)
{
if (window.event) 
{e = window.event;}
if (e.keyCode == 13)
{
LogIn();
}
}

</script>

 
<title>GA Al-Anon/Alateen Members Area</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
<body>

<!-- Ask for Password -->
<H1>Al-Anon Members Area</H1>
You have reached the Georgia Area Al-Anon / Alateen Members site. <br>
This is a password protected site for Al-Anon and Alateen members.<br>
Please enter the name of your home group followed by "afg" in the
password box. Make sure you click the button. Do not press enter on
your keyboard.<br>
<br>

<form name="form1">
		<font face="Arial" color="#0000a0"><strong>Password:</strong></font>
		<!--<input name="password1" type="password">-->
		<input id="password1" onkeypress="searchKeyPress(event);" type="text">&nbsp; <input value="Click to Enter Site" onclick="LogIn()" type="button"> 
</form>


</body>
</html>