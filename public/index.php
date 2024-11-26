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
//	$today = "2025-03-09";
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
<img src="images/Christingle24.jpg" align="right" height="100" style="padding-right: 20px">
<img src="images/JMHChristingle.jpg" align="left" height="100" style="padding-right: 20px">
We ran a very successful <b>Christingle stall</b> as part of the festivities for
the Christmas lights switch-on in Fareham.
We welcomed almost 200 children and their families to make a Christingle, and had some
great conversations as we bore witness to the real meaning of Christmas. Many thanks
to all the volunteers, from several different churches, who came along to help out.  
</div>

<div>
<p>&nbsp;
<h2>Upcoming events</h2>

<?php if (today_in_range(end: "2024-12-25")):?>
<div>
<h3>Christmas is coming!</h3> 
<p>We have <a href="xmas24.php">a page listing the Christmas services</a> which have been notified to us; or
visit <a href="members.php">our member churches' websites</a> to find out when their Christmas services are.
<?php if (today_in_range(null, "2024-12-13")):?>
<p><b>An Advent service featuring Graham Kendrick's <i>The Gift</i></b> 
is taking place at Immaculate Conception Catholic Church in Stubbington, on Friday 13th December at 7pm.
All are welcome.
</div>
<?php endif ?>

<?php if (today_in_range(null, "2024-12-21")):?>
<div>
<p>&nbsp;
<p><a href="images/Carols Poster.jpg"><img src="images/Carols Poster.jpg" align="left" height="100" style="padding-right: 20px"></a>
We will be <b>singing carols in Fareham shopping precinct</b> on Saturday 21st December, 10.30 to 11.30am.
Come and join us! Click the poster for more details.
</div>
<?php endif ?>

<?php endif ?>

<?php if (today_in_range(start: "2024-12-26", end: "2025-03-09")):?>
<div>
<p>&nbsp;
<p><img src="https://spckpublishing.co.uk/media/catalog/product/cache/cb3521e067d2c6b88107646df6ae4ecd/9/7/9781915843012_2.jpg" 
 align="left" height="100" style="padding-right: 20px">
We are once again running <b>ecumenical study groups during Lent</b>. They are a brilliant opportunity
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

<?php if (today_in_range(start: "2024-12-26", end: "2025-01-25")):?>
<div>
<p>&nbsp;
<p>The <b>Week of Prayer for Christian Unity</b> runs from 18th to 25th January.
Resources for the Week are available from
<a href="https://ctbi.org.uk/resources-for-week-of-prayer-for-christian-unity-2025/">Churches 
Together in Britain and Ireland</a>.
<?php if (today_in_range(end: "2025-01-19")):?>
<p>There will be a service of prayer for Christian Unity on Sunday 19th January, 
at Holy Trinity Church, West Street PO16 0EL,
starting at 4pm, to which everyone is welcome.
<?php endif ?>
</div>
<?php endif ?>

<?php if (today_in_range(start: "2025-01-26", end: "2025-03-07")):?>
<div>
<p>&nbsp;
<p>The <b>World Day of Prayer</b> is on Friday 7th March.
<p>We will be meeting for worship at ???, at 2pm and again at 7pm; all are welcome.
</div>
<?php endif ?>

<?php if (today_in_range(start: "2025-03-08", end: "2025-04-19")):?>
<div>
<p>&nbsp;
<p>We are meeting to share in worship on <b>Good Friday</b>, 19th April,
at the Podium in West Street, starting at 10.30am. Come and join us!
</div>
<?php endif ?>

<?php if (today_in_range(start: "2025-03-01", end: "2025-03-26")):?>
<div>
<p>&nbsp;
<p>The next meeting of Christians Together in Fareham is on Wednesday 26th March, at St Philip Howard Church,
Bishopsfield Road PO14 1QS, at 7.15pm for 7.30. All are welcome.
</div>
<?php endif ?>

</div>
</body>
</html>