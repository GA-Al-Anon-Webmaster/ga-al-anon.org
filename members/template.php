<?php
// Template for other pages
session_start(); 
if(isset($_SESSION['views']))			//check to see if this user has gone through the Password challenge
	{	$_SESSION['views']=$_SESSION['views']+1;
		}
else
// send them back to the Password challenge and then bring them back here
	{
		$_SESSION['return']=$_SERVER['REDIRECT_SCRIPT_URI'];
//		$_SESSION['return'] ="ga-al-anon.org/members/template.php" ;
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

<!-- This is dummy content - replace with your real page -->
<h1> You should never see this page </h1>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views']."</br>";

echo "Return URI=". $_SESSION['return']."!</br>";

// echo '<pre>'; print_r(get_defined_vars()); echo '</pre>';
?>

</body>
</html>