<HTML>
<HEAD>
<meta http-equiv="Content-Language" content="en-us">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
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
	
<BODY BGCOLOR="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">

			<TR>
				
    <body>
    <TD ALIGN="LEFT" VALIGN="TOP"> 
      <P>&nbsp; 
      <TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">

					<TR>
						<TD WIDTH="0%">&nbsp;</TD>
						
          <TD ALIGN="LEFT" VALIGN="TOP"> <p><br>
              <strong><font color="#0033FF" size="3" face="Arial, Helvetica, sans-serif">
          All Georgia Al-Anon / Alateen Meetings by </font>
          <font face="Arial, Helvetica, sans-serif" color="#0033FF">City</font></strong></p>
            <p><font color="#0033FF" size="1" face="Arial, Helvetica, sans-serif"> 
              Note: * designates that an AA group meets at the same time.</font></p>
            <p><font color="#0033FF" size="1" face="Arial, Helvetica, sans-serif"><font color="#FF0000" size="4"></font></font></p>
            
            <table cellSpacing="1" cellPadding="1" id="table1">
  <tr>
    <td>
    <div align="left">
      <font face="Arial" size="2">District</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">Group</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">WSO #</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">Meeting Times</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">Meeting Place</font></div>
    </td>
    <td>
    <div align="center">
      <font face="Arial" size="2">Address</font></div>
    </td>
    <td>
    <div align="center">
      <font face="Arial" size="2">City</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">State</font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2">Zip</font></div>
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

				$sql="select * from meetings where active='y' order by city, zip";

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
    <div align="left">
      <font face="Arial" size="2"><?php echo $district; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $group; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $wso; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $times; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $place; ?> </font>
    </div>
    </td>
    <td>
    <div align="center">
      <font face="Arial" size="2"><?php echo $address; ?></font></div>
    </td>
    <td>
    <div align="center">
      <font face="Arial" size="2"><?php echo $city; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $state; ?></font></div>
    </td>
    <td>
    <div align="left">
      <font face="Arial" size="2"><?php echo $zip; ?></font></div>
    </td>
  </tr>
  				<?php }

				mysql_free_result($results);

				mysql_close($link);				?>
</table></TD>
						<TD WIDTH="2%">&nbsp;</TD>
					</TR>

					<TR HEIGHT="2">
						<TD WIDTH="0%" HEIGHT="2">&nbsp;</TD>
						<TD WIDTH="98%" HEIGHT="2">
                        <p align="center">&nbsp;</p>
                        <p align="center"><font face="Arial">
                        <a href="Library/meetings.php">
                        Back to Meeting Info</a></font></TD>
						<TD WIDTH="2%" HEIGHT="2">&nbsp;</TD>
					</TR>
				</TABLE>
				</P>
				<P>&nbsp;</TD>
			</TR>

			</TABLE>
		</P>
</BODY>
</HTML>
