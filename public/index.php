<!DOCTYPE php>
<html>
<head>
<meta charset="UTF-8">
<link href="site.css" rel="stylesheet" type="text/css">
<title>Christians Together in Fareham</title>
</head>
<body>
<?php
function today_in_range($start = null, $end = null)
{
	$today = date("Y-m-d");
//	$today = "2025-12-22";
	if (empty($start)) $start_iso = $today;
	if (empty($end)) $end = $today;
	return $today >= $start && $today <= $end;
}
?>
<?php
include("nav.html")
?>
<h1>Welcome!</h1>

<div>
<img src="images/ctiflogo.jpg" align="left" height="100">
<p>This is the website of Christians Together in Fareham - the churches in Fareham
working together in partnership to proclaim the Good News about Jesus, and to
bless our community through what we say and what we do.
<p>Please have a look around, and if you have any questions about us and
what we do, or about any of our member churches, please 
<a href="mailto:enquiries@farehamchristians.org.uk">send us an email.</a>
</div>

<div>
<p>&nbsp;
<!--
<h2>Latest news</h2>
<p>
<div>
<img src="/images/HolClubVolunteers2026.jpg" height="100" align="left">
We have come to the end of another successful <b>Holiday Club</b>. The 60
children, aged from 5 to 11, had a wonderful time with Bible teaching, singing
and dancing, and activities including craft, science, games, cooking and music.
Many thanks to all our wonderful volunteers (see picture), to our three host churches 
for their hospitality, and to everyone who supported us in prayer.
</div>
</div>
<div>
<p>&nbsp;
-->
<h2>Upcoming events</h2>
<div>
<p>
We will be running a <b>Christingle stall</b> in the town centre, as part of the festivities
for the switch-on of Christmas lights, on Saturday 21st November from 10am. This is a 
wonderful opportunity to engage with children and their families about the true meaning
of Christmas.
</div>
<div>
<p>
We will be <b>singing carols</b> in the run-up to Christmas:
<ul>
<li>at the Castle in the Air, Old Gosport Road, on Thursday 10th December from 7.30pm.
<li>at the Fareham pub, Trinity Street, on Wednesday 16th December from 7pm.
<li>at the Podium in West Street, on Saturday 19th December from 10.30am.
</div>
<div>
<p>
For details of <b>Christmas services</b> in our member churches, please visit the individual
churches' websites via our <a href="/members.php">Members and projects</a> page.
</div>
<div>
<p>
We will meet together for worship in the <b>Week of Prayer for Christian Unity</b>,
at the United Reformed Church, Osborn Road South, on Sunday 24th January. 
Time to be confirmed, but likely to be either 3pm or 4pm.
</div>
<div>
<p>
Our next meeting, for planning, sharing and prayer, is our Annual General Meeting on 
<b>Thursday 4th February</b>, at
7.15 for 7.30pm, at Gateway Church, West Street. Everyone is welcome.
</div>
</body>
</html>