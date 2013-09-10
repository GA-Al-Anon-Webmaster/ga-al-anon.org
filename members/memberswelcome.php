<?php
// Template for other pages
session_start(); 
if(isset($_SESSION['views']))			//check to see if this user has gone through the Password challenge
	$_SESSION['views']=$_SESSION['views']+1;
else
// send them back to the Password challenge and then bring them back here
	{
		$_SESSION['return']=$_SERVER['SCRIPT_URI'];
		header( 'Location: http://www.ga-al-anon.org/members/index.php' ) ;
//		die();
	}
	
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">  
<title>GA Al-Anon/Alateen Members Area</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
<body>
<H1> Welcome Al-Anon Member</H1>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

</body>
</html>