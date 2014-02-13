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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SignIn to the GA Al-Anon Members Area">
<meta name="author" content="Patrick B.">

<title>GA Al-Anon/Alateen Members Area</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">
</head>
<body>

<?php
if (isset($_POST["passwd"])) {
	echo "<h2>Sorry - Invalid log-in. Please enter your group name followed by afg into the textbox.</h2>" ;
}

?>
<div class="container">

  <form class="form-signin" name="form1"  action="index.php" method="post">
    <h2 class="form-signin-heading">Georgia Al-Anon Members Area</h2>
	<section>
		<p>You have reached the Georgia Area Al-Anon / Alateen Members site. </p>
		<p>This is a password protected site for Al-Anon and Alateen members.</p>
		<p>Please enter the name of your home group followed by "afg" in the</p>
		<p>password box.</p>
	</section>
    <input type="password" class="form-control" placeholder="Password" autofocus name="passwd">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster --><!-- Ask for Password - give a hint as to what to fill in here -->



</body>
</html>