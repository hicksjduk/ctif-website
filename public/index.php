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
<h2>Upcoming events</h2>
<div>
Our next meeting, for planning, sharing and prayer, is on <b>Tuesday 15th September</b>, at
7.15 for 7.30pm, at St John's Church, Upper St Michael's Grove PO14 1DN. Everyone is welcome.
</div>
</body>
</html>