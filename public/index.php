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
	if (empty($start)) $start_iso = $today;
	if (empty($end)) $end = $today;
	return $today >= $start && $today <= $end;
}
?>
<?php
include("nav.html")
?>
<h1>Welcome!</h1>
<div style="clear:both">
<img src="images/ctiflogo.jpg" align="left" height="100" style="padding-right: 20px">
<p>This is the website of Christians Together in Fareham - the churches in Fareham
working together in partnership to proclaim the Good News about Jesus, and to
bless our community through what we say and what we do.
<p>Please have a look around, and if you have any questions about us and
what we do, or about any of our member churches, please 
<a href="mailto:enquiries@farehamchristians.org.uk">send us an email.</a>
</div>
<div style="clear: both; padding-top: 10px">
<h2>Latest news</h2>
<p>
<img src="images/Christingle24.jpg" align="right" height="100" style="padding-right: 20px">
<img src="images/JMHChristingle.jpg" align="left" height="100" style="padding-right: 20px">
We ran a very successful <b>Christingle stall</b> as part of the festivities for
the Christmas lights switch-on in Fareham.
We welcomed almost 200 children and their families to make a Christingle, and had some
great conversations as we bore witness to the real meaning of Christmas. Many thanks
to all the volunteers, from several different churches, who came along to help out.  
</div>
<div style="clear: both; padding-top: 10px">
<h2>Upcoming events</h2>
<?php if (today_in_range(end: "2024-12-25")):?>
<p>
<div style="clear: both">
<h3>Christmas is coming!</h3> 
<p>We have <a href="xmas24.php">a page listing the Christmas services</a> which have been notified to us; or
visit <a href="members.php">our member churches' websites</a> to find out when their Christmas services are.
<?php if (today_in_range(null, "2024-12-13")):?>
<p><b>An Advent service featuring Graham Kendrick's <i>The Gift</i></b> 
is taking place at Immaculate Conception Catholic Church in Stubbington, on Friday 13th December at 7pm.
All are welcome.
<?php endif ?>
<?php if (today_in_range(null, "2024-12-21")):?>
</div>
<div style="clear: both; padding-top: 10px">
<p><a href="images/Carols Poster.jpg"><img src="images/Carols Poster.jpg" align="left" height="100" style="padding-right: 20px"></a>
We will be <b>singing carols in Fareham shopping precinct</b> on Saturday 21st December, 10.30 to 11.30am.
Come and join us! Click the poster for more details.
<?php endif ?>
</div>
<?php endif ?>
<?php if (today_in_range(start: "2024-12-26", end: "2025-03-04")):?>
<div style="clear: both; padding-top: 10px">
<h3>Lent study groups</h3>
<img src="https://spckpublishing.co.uk/media/catalog/product/cache/cb3521e067d2c6b88107646df6ae4ecd/9/7/9781915843012_2.jpg" 
 align="left" height="100" style="padding-right: 20px">
<p>We will once again be running ecumenical study groups during Lent. They are a brilliant opportunity
to meet, study and pray with Christians of different traditions.
<p>In 2025, groups will meet for five weekly sessions, starting in the week commencing 10th March.
They will be using the course 
<a href="https://spckpublishing.co.uk/you-can-be-serious-meeting-jesus-afresh-in-john-s-gospel-257">"You 
Can Be Serious!"</a>,written by Bishop David Wilbourne. 
<p>If you would like to be part of a group,
 please contact <a href="mailto:lent@farehamchristians.org.uk">Liz Dunning</a> as soon
as possible.
</div>
<?php endif ?>
</div>
</body>
</html>