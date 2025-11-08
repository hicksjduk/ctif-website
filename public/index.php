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
</div>
<div>
<img src="images/HolClub.png" align="left" height="100">
Our <b>2025 Summer Holiday Club</b> took place from 28th July to 1st August.
It was a huge success with 60 children and about 50 adults enjoying time together, 
learning and exploring what it is to have God and Jesus in our lives!
<br>Thank you everyone for your support and prayers.
Please continue to pray for the children and their families. Pray that the seeds sown will germinate and flourish.
<br>If you would like to know more or be involved next year, please 
<a href="mailto:chair@farehamchristians.org.uk">make contact.</a>
</div>
<div>
<p>&nbsp;
<h2>Upcoming events</h2>
<div>
<img src="images/Christingle24.jpg" align="right" height="100" style="padding-right: 20px">
We are running a <b>Christingle stall</b>, as part of the festivities for
the Christmas lights switch-on in Fareham, on Saturday 22nd November,
This is an opportunity for children and their families to make a Christingle, and
to talk about the real meaning of Christmas.  
<p>The next meeting of Christians Together in Fareham is on Tuesday 3rd February, 
at Fareham United Reformed Church,
Osborn Road South PO16 7DG, at 7.15pm for 7.30.
This will be our Annual General Meeting, where we will celebrate all that we have
done in Jesus' name over the past year, and will elect a new Chair to replace
Rachel Hicks, who is stepping down. 
All are welcome.
</div>
</div>
</body>
</html>