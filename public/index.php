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
</div>
<div>
<p>At our Annual General Meeting on 3rd February, <b>Rev Sam Cullen</b> was elected
to serve as the Chair of CTiF for the next three years. We are delighted that Sam has
agreed to take on this role. To find out a little bit more about her, please visit
<a href="whoswho.php">our "Who's Who" page.</a> 
<p><b>The Fareham Well</b> - a grant-making charity with its origins in a 
Christians Together in Fareham project - is inviting applications for grants.
For more information, <a href="https://www.farehamwell.org.uk/">please 
visit their website</a>, through which
online grant applications can also be made.
</div>
<div>
<img src="images/calogo.gif" align="left" width="100">
<p>Our <b>Lent Lunches</b> were a great success, and raised around &pound;800 for Christian Aid.
Many thanks to those who organised the lunches, those who catered, and all who 
attended and gave so generously.</a>
</div>
<div>
<p>&nbsp;
<h2>Upcoming events</h2>
<div>
<img src="images/HolClub.png" align="left" width="100">
<p>Our <b>Summer Holiday Club</b> will take place once again during the first full week of the
school summer holidays, from Monday 27th to Friday 31st July. <a href="holclubreg.php">Click
this link</a> to find out more.
</div>

</div>
</body>
</html>