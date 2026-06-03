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
<img src="https://lh3.googleusercontent.com/sitesv/AA5AbUDdv39lhaZPSeHktLjGyVVY3GI7ing8sFPrYWfoNr79t4_t7U_4ivXV2souhTkMoZA5zYZvFjTiuGMbqFFcgXvc-AhwL4a4J0LOSgahQA1ex--8P0Lye0uMBoL0ev7_qrUrO_GsgO0UkcGbha2T2VmytiHuwh9LTnUiO7UImMTzJLArJgWgZe7X4RhFaA06bQgwtpoP8hhlre9b_qT6REhRnhbHijOXvO8x=w1280" align="left" width="100">
<b>Fareham Good Neighbours</b> are seeking to recruit new volunteer befrienders.
<a href="/images/VolunteerFlyer31May26.png">Click here</a> to find out more. 
You can also meet them at their monthly gatherings, on the first Tuesday of every month,
between 10.30am and 12.30pm, at the Summerhouse Coffee Lounge, Silver Springs Garden Centre, Fareham 
<a href="https://maps.app.goo.gl/WrdMonaCsYpbvAQH8">(map)</a>.
Or visit their new website at 
<a href="https://www.farehamgoodneighbours.org">https://www.farehamgoodneighbours.org</a>,
or their Facebook page at <a href="https://www.facebook.com/FarehamGoodNeighbours">https://www.facebook.com/FarehamGoodNeighbours</a>.
</div>
<div>
<p>&nbsp;
<h2>Upcoming events</h2>
<div>
<img src="images/HolClubBooked.png" align="left" width="100">
<p>Our <b>Summer Holiday Club</b> will take place once again during the first full week of the
school summer holidays, from Monday 27th to Friday 31st July. 
<?php /* ?>
Bookings will open <b>at 9am on Wednesday 6th May</b>.
<a href="holclubreg.php">Click
this link</a> to find out more.
<?php */ ?>
<?php /* ?>
<b>Bookings are now open.</b>
<a href="holclubreg.php">Click
this link</a> to find out more, or to book.
<?php */ ?>
<a href="holclubreg.php">Click
this link</a> to find out more.
<b>Bookings are now closed</b> as we are fully booked.

</div>

</div>
</body>
</html>