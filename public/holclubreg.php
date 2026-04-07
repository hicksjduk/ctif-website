<!DOCTYPE php>
<html>
<head>
<meta charset="UTF-8">
<link href="site.css" rel="stylesheet" type="text/css">
<title>Holiday Club 2026</title>
</head>
<body>
<?php
include("nav.html")
?>
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
<a href="images/HolClub.png"><img src="images/HolClub.png" align="right" height="300"></a>
<h1>Holiday Club 2026</h1>
<h2>When is it?</h2>
Monday 27th to Friday 31st July - 9.45am to 1.15pm. On Friday 31st July, parents/carers are invited to come along at 12.45pm to watch the 'All Together Activity'. 
<h2>Where is it?</h2>
The Holiday Club is based at Gateway Church Fareham (171-173 West Street), but activities will also take place at Fareham United Reformed Church and Fareham Methodist Church.
The location for dropping off and picking up your child will always be Gateway Church. The children will be escorted safely to the other venues. 
<h2>How much does it cost?</h2>
The cost of the week is &pound;15 per child. However, if the cost for your child/children is a challenge for you, please let us know as we may be able to help. 
<h2>Is food provided?</h2>
Yes. The children will be given a snack during the morning, as well as lunch. 
<h2>How do I book a place for my child?</h2>
<?php /* ?>
Fill in <a href="https://form.jotform.com/240794176485064">the registration form.</a> 
<?php */ ?>
Bookings will open on <b>Wednesday 6th May</b>. Please check back here once bookings are 
open, and click the link to the registration form.
<p><b>Please note that demand for the holiday club is likely to be extremely high.
In fairness to everyone, we ask you only to book if you can ensure that your child 
will be able to attend all five days.</b>
<h2>Any other questions?</h2>
Contact Debs on 07749 023776, or email <a href="mailto:holidayclub@farehamchristians.org.uk">holidayclub@farehamchristians.org.uk</a>
</body>
</html>