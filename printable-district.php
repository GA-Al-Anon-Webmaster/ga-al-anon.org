<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META NAME="generator" CONTENT="Microsoft FrontPage 6.0">
<TITLE>Georgia Al-Anon/Alateen Meetings</TITLE>
<META NAME="KEYWORDS" CONTENT="alcoholism, recovery, addiction, 12 step recovery programs, family recovery, support groups, self-help groups, depression, wellness, twelve step program, substance abuse, mental health, alcholism, women's health, mutual support groups">
<meta name="keywords" content="Georgia Al-Anon/Alateen, 12 Step Recovery,Ga Al-Anon/Alateen ">
<meta name="description" content="Georgia Al-Anon/Alateen">


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

</head>
	
<BODY BGCOLOR="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<body>
		</P>
      <TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" id="table2">

					<TR>
						<TD>&nbsp;</TD>
						
          <TD ALIGN="LEFT" VALIGN="TOP">&nbsp;
          </TD>
						<TD >&nbsp;</TD>
					</TR>

					<TR >
						<TD >&nbsp;</TD>
						
          <TD ALIGN="LEFT" VALIGN="TOP"> <br>
              <strong><font color="#0033FF" size="3" face="Arial, Helvetica, sans-serif">
          All Georgia Al-Anon / Alateen Meetings by District</font></strong>
      <p><font color="#0033FF" size="1" face="Arial, Helvetica, sans-serif"> Note: 
        * designates that an AA group meets at the same time.</font></p>
      <p><font color="#0033FF" size="1" face="Arial, Helvetica, sans-serif"><font color="#FF0000" size="4"></font></font></p>
            
            <table cellSpacing="1" cellPadding="1" id="table3">
  <tr>
    <td>
    
      <font face="Arial" size="2"><b>District</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>Group name</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>WSO #</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>Meeting Time</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>Meeting Place</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>Street Address</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>City </b></font>
    
    </td>
    <td>

      <font face="Arial" size="2"><b>State</b></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><b>Zip code</b></font>
    </td>
  </tr>

			 <?php

				$state="GA";

				function convertHour($k) {
					$mhour = ''; $mmin = ''; $mtime = '';
					$mhour = substr($k,0,2);
					$mmin = substr($k,3,2);
					if($mhour > 12) {
						$mhour = $mhour - 12;
						$mtime = $mhour . ":" . $mmin . " PM";
					} elseif($mhour == 12) {
						$mtime = $mhour . ":" . $mmin . " PM";		
					} else {
						$mtime = $mhour . ":" . $mmin . " AM";
					}
					return $mtime;
				}

				include 'opendb.php';

				$sql="select * from meetings where active='y'  order by district, zip";

				$results = mysql_query($sql) or die("Failed: ".mysql_error());

				while ($row = mysql_fetch_array($results, MYSQL_ASSOC))  {
					$district=$row["district"];
					$wso=$row["wso"];
					if ($row["time1"] != "")
						{
//							echo "day - time: ". $row["day1"] . " " . $row["time1"]. "<br />";
//							echo "Convert Hour: " . convertHour($row["time1"]). "<br />";
						$times=$row["day1"] . " " . convertHour($row["time1"]);
						}
					if ($row["time2"] != "")
						{
						$times=$times . "<br />" . $row["day2"] . " " . convertHour($row["time2"]);
						}
					if ($row["time3"] != "")
						{
						$times=$times . "<br />" . $row["day3"] . " " . convertHour($row["time3"]);
						}
					if ($row["time4"] != "")
						{
						$times=$times . "<br />" . $row["day4"] . " " . convertHour($row["time4"]);
						}
					if ($row["time5"] != "")
						{
						$times=$times . "<br />" . $row["day5"] . " " . convertHour($row["time5"]);
						}
					if ($row["time6"] != "")
						{
						$times=$times . "<br />" . $row["day6"] . " " . convertHour($row["time6"]);
						}
					if ($row["time7"] != "")
						{
						$times=$times . "<br />" . $row["day7"] . " " . convertHour($row["time7"]);
						}


					$group=$row["group"];
					$place=$row["place"];
					$address=$row["address"];
					$city=$row["city"];
					$state=$row["state"];
					$zip=$row["zip"];
				?>

  <tr>
    <td>
    
      <font face="Arial" size="2"><?php echo $district; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $group; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $wso; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $times; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $place; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $address; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $city; ?></font>
    
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $state; ?></font>
    </td>
    <td>
    
      <font face="Arial" size="2"><?php echo $zip; ?></font>
    </td>
  </tr>
  				<?php }

				mysql_free_result($results);

				mysql_close($link);				?>
</table></TD>
						<TD >&nbsp;</TD>
					</TR>

					<TR>
						<TD>&nbsp;</TD>
						<TD>
                        <p align="center">&nbsp;</p>
                        <p align="center"><font face="Arial">
                        <a href="Library/meetings.php">
                        Back to Meeting Info</a></font></TD>
						<TD>&nbsp;</TD>
					</TR>
				</TABLE>
				</BODY>
</HTML>
