<!DOCTYPE html >

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Georgia Al-Anon/Alateen Meeting</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" charset="utf-8">
	<meta name="author" content="Patrick B">
	<!-- Date: 2013-11-20 -->
</head>
<body>
	
<header>
	<div id="navbarpmb" class="navbar navbar-inverse navbar-static-top" >
		<div class="container">
			
			
			<a href="/index.html" class = "navbar-brand"><img src="images/50_years-100px.png" class="img-responsive" alt="GA Al-Anon">
				GA Al-Anon
			</a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>	
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li class = "active"><a href = "/index.html">Home</a></li>
					<li><a href = "/Library/meetings.php">Meetings</a></li>
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">What's Al-Anon / Alateen <b class = "caret"></b></a>
						<ul class = "dropdown-menu" >
							<li><a href = "/Library/hope.html">About - Hope and Help</a></li>
							<li><a href = "/Library/pro.html">Professional Info</a></li>
							<li><a href = "/Library/12steps.html">Steps</a></li>
							<li><a href = "/Library/12traditions.html">Traditions</a></li>
							<li><a href = "/Library/12concepts.html">Concepts</a></li>								
						</ul>
					</li>
					<li><a href = "/calendar.php">Area Events</a></li>
					<li><a href = "/Library/members.html">Area Info</a></li>
					<li><a href = "/Library/alateen.html">Alateen</a></li>
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Info Services <b class = "caret"></b></a>
						<ul class = "dropdown-menu" >
							<li><a href = "/Library/alalist.html">GA Area Central Svcs (GACS)</a></li>
							<li><a href = "http://www.alanonatl.com/">Metro Atl Info Svcs (MAIS)</a></li>
						</ul>
					</li>
					<li><a href = "http://www.aageorgia.org/">AA</a></li>
					<li><a href = "/Library/webFeedbackForm.html">Feedback</a></li>
				</ul>
			</div>	<!-- navHeadreCollapse -->
		</div>	<!-- container -->
		
	</div>	<!-- navbarpmb -->
</header>	
	
<!-- Contents start here -->	
<div class = "container">
	<div class = "jumbotron">
		<img src="/images/Ga_Al-Anon_Logo.gif" alt="Georgia Al-Anon Hope and help for families and friends of alcoholics" class="pull-left">
		<h1>Georgia Al-Anon / Alateen Meetings by District</h1>
				AFG = Al-Anon Family Groups <br><br>
		
		
				A "Closed" meeting is for anyone who is troubled by someone else's drinking. <br><br>
				An "Open" meeting also welcomes guests, students, and interested professionals who want to learn by observing an Al-Anon meeting. Observers attending open Al-Anon meetings are requested to abide by the principles that guide participation in all Al-Anon Family Group meetings, most especially the principles of confidentiality and anonymity that protect its members.
			</font></strong>
	</div> <!-- End of Jumbotron Class -->
	<div class = "row"><!-- Table Header -->
		<div class="col-lg-1">
			Dist #
		</div>
		<div class="col-lg-1">
			WSO #
		</div>
		<div class="col-lg-2">
			Group Name
		</div>
		<div class="col-lg-1">
			Meeting day &amp; time
		</div>
		<div class="col-lg-2">
			Meeting place
		</div>
		<div class="col-lg-1">
			Street Address
		</div>
		<div class="col-lg-1">
			City, St
		</div>
		<div class="col-lg-1">
			ZIP
		</div>
		<div class="col-lg-2">
			Notes
		</div>
	</div> <!-- End of Table Header Row Class -->

	<!-- Query Database for WSO meeting numbers -->
              <?php

				$state="GA";
				$wso = $_GET["wso"];
				$active="y";
				$dow = array(
					"Sun",
					"Mon",
					"Tue",
					"Wed",
					"Thu",
					"Fri",
					"Sat"
				);
				include 'opendb.php';

				$sql=sprintf("select recordid, city, m.group, district, wso, day1, time1, day2, time2, day3, time3, day4, time4, day5, time5, day6, time6, day7, time7, place, address, state, zip, notes from meetings m where active = '%s' and wso = %s order by district, zip",
				//	mysqli_real_escape_string($link, $active),
				//	mysqli_real_escape_string($link, $district));
					mysql_real_escape_string($active),
					mysql_real_escape_string($wso));
	
			//	$results = $link->query($sql) or die("Failed: ". mysql_error());
				$results = mysql_query($sql) or die("Failed: ". mysql_error());

			//	while ($row = $results->fetch_assoc())  {
				while ($row = mysql_fetch_array($results))  {
					if ($row["time1"] != "")
						{
						$daytime[array_search($row["day1"],$dow) . $row["time1"] . $row["recordid"] ]= $row["recordid"];
						}
					if ($row["time2"] != "")
						{
						$daytime[array_search($row["day2"],$dow) . $row["time2"] . $row["recordid"] ]=$row["recordid"];
						}
					if ($row["time3"] != "")
						{
						$daytime[array_search($row["day3"],$dow) . $row["time3"] . $row["recordid"] ]=$row["recordid"];
						}
					if ($row["time4"] != "")
						{
						$daytime[array_search($row["day4"],$dow) . $row["time4"] . $row["recordid"] ]=$row["recordid"];
						}
					if ($row["time5"] != "")
						{
						$daytime[array_search($row["day5"],$dow) . $row["time5"] . $row["recordid"] ]=$row["recordid"];
						}
					if ($row["time6"] != "")
						{
						$daytime[array_search($row["day6"],$dow) . $row["time6"] . $row["recordid"] ]=$row["recordid"];
						}
					if ($row["time7"] != "")
						{
						$daytime[array_search($row["day7"],$dow) . $row["time7"] . $row["recordid"] ]=$row["recordid"];
						}

//					echo "<pre>Row ",
//					print_r($row,TRUE),
//					"</pre>";
					
					$meetingrecord[$row["recordid"]] = $row;

					
					$district=$row["district"];
					$wso=$row["wso"];
					$day1=$row["day1"];
					$day2=$row["day2"];
					$time1=$row["time1"];
					$time2=$row["time2"];
					$group=$row["group"];
					$place=$row["place"];
					$address=$row["address"];
					$city=$row["city"];
					$state=$row["state"];
					$zip=$row["zip"];
					$notes=$row["notes"];
					

				?>  <?php }

					mysql_free_result($results);

					mysql_close($link);				?>
					<?php
					ksort($daytime);
					// dump arrays
//					echo "<pre>Daytime ",
//					print_r($daytime,TRUE),
//					print_r($meetingrecord,TRUE),
//					"</pre>";
//


foreach($daytime as $k => $x)	{
	$mhour = ''; $mmin = ''; $mtime = '';
	$mhour = substr($k,1,2);
	$mmin = substr($k,4,2);
	if($mhour > 12) {
		$mhour = $mhour - 12;
		$mtime = $mhour . ":" . $mmin . " PM";
	} elseif($mhour == 12) {
		$mtime = $mhour . ":" . $mmin . " PM";		
	} else {
		$mtime = $mhour . ":" . $mmin . " AM";
	}
					?>					
	
	<div class = "row">
		<div class="col-lg-1">
			<!-- District No -->
			<?php echo $meetingrecord[$x]["district"]; ?>
		</div>
		<div class="col-lg-1">
			<!-- WSO Group No -->
			<?php echo $meetingrecord[$x]["wso"]; ?>
		</div>
		<div class="col-lg-2">
			<!-- Group Name -->
			<?php echo $meetingrecord[$x]["group"]; ?>
		</div>
		<div class="col-lg-1">
			<!-- Meeting day &amp; time -->
			<?php echo $dow[substr($k,0,1)] . " " . $mtime; ; //day?>
		</div>
		<div class="col-lg-2">
			<!--  Meeting place -->
			<?php echo $meetingrecord[$x]["place"]; ?>
		</div>
		<div class="col-lg-1">
			<!-- Street Address -->
			<?php echo $meetingrecord[$x]["address"]; ?>
		</div>
		<div class="col-lg-1">
			<!-- City, St -->
			<?php echo $meetingrecord[$x]["city"]; ?>, 
			<?php echo $meetingrecord[$x]["state"]; ?>
		</div>
		<div class="col-lg-1">
			<!-- ZIP -->
			<?php echo $meetingrecord[$x]["zip"]; ?>
		</div>
		<div class="col-lg-2">
			<!-- Notes -->
			<?php echo $meetingrecord[$x]["notes"]; ?>
		</div>
		
	</div> <!-- End of Row Class -->
	<?php 
	}
	//					echo "<pre>",
	//					print_r($daytime,TRUE),
	//					"</pre>";
	?>	
</div> <!-- End of Container Class -->

<!-- Contents end here -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-37159622-1', 'auto');  // Replace with your property ID.
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->

</body>
</html>
