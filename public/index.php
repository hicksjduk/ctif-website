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
<img src="images/ctiflogo.jpg" align="left" height="100" style="padding-right: 20px">
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
</div>
<div>
<p>&nbsp;
<h2>Upcoming events</h2>
<div>
<img src="https://spckpublishing.co.uk/media/catalog/product/cache/cb3521e067d2c6b88107646df6ae4ecd/9/7/9781909107236_1.jpg" align="left" height="100">
<p><b>Lent Study Groups</b> will run for five weeks, starting in the week beginning
23rd February. We will be using the York Course <b>Daring to See God Now
</b> by Bishop Nick Baines, which explores aspects of the 
Good News proclaimed by Jesus in Mark's Gospel.
<br>All are welcome to take part. To find out more, please <a href="lent2026.php">click 
this link.</a>
</div>
</div>
</body>
</html>