<!DOCTYPE php>
<html>
<head>
<meta charset="UTF-8">
<link href="site.css" rel="stylesheet" type="text/css">
<title>Member churches and supported projects</title>
<script lang="javascript">
function show(div) {
	[...document.getElementsByClassName("churchdata")].forEach
		(e => e.style.display = e.id == div ? "inline" : "none")
}
</script>
</head>
<body>
<?php
include("nav.html")
?>
<?php
$div = $_GET['id'] ?? ''
?>
<h1>Member churches and supported projects</h1>
<div id="members"/>
<div id="content">
<p>
Click a name in the list on the right to see the details of that church or project.

<div class="churchdata" id="urc" style="display:none">
<img src="/images/furc_img_assist_custom.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Fareham United Reformed Church</h2>
<p>18 Osborn Road South, Fareham PO16 7DG
<p><a href="https://goo.gl/maps/hUqhr9xrvGUBgR5u8" target="_">(map)</a> 
<a href="https://farehamurc.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="methodist" style="display:none">
<img src="/images/MethodistChurchFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Fareham Methodist Church</h2>
<p>King's Road, Fareham PO16 0NU
<p><a href="https://goo.gl/maps/5DHDJZHuHbgfQsq6A" target="_">(map)</a> 
<a href="https://www.farehammethodist.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="baptist" style="display:none">
<img src="/images/BaptistChurchFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Fareham Baptist New Life Church</h2>
<p>Gosport Road, Fareham PO16 0QW
<p><a href="https://goo.gl/maps/4LNJetP8n1tpQ8UC9" target="_">(map)</a> 
<a href="http://www.farehambaptist.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="hpbaptist" style="display:none">
<img src="/images/Hill-Park.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Hill Park Baptist Church</h2>
<p>217 Gudge Heath Lane, Fareham PO15 6PZ
<p><a href="https://goo.gl/maps/6D4dD8We1BNebEvh9" target="_">(map)</a> 
<a href="http://www.hillparkbaptist.org/" target="_">(website)</a>
</div>

<div class="churchdata" id="stjohns" style="display:none">
<img src="/images/StJohnsFareham.jpeg" width="200" align="left" style="padding-right: 20px">
<h2>St John the Evangelist Church</h2>
<p>1A Upper St Michael's Grove, Fareham PO14 1DN
<p><a href="https://goo.gl/maps/34W49NeTMVFbL34n6" target="_">(map)</a> 
<a href="https://www.stjohnsfareham.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="trinity" style="display:none">
<img src="/images/HolyTrinity.jpeg" width="200" align="left" style="padding-right: 20px">
<h2>Holy Trinity Church</h2>
<p>132 West Street, Fareham PO16 0EL
<p><a href="https://goo.gl/maps/199AWvs2V34AVTqk8" target="_">(map)</a> 
<a href="http://www.htscf.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="stcolumba" style="display:none">
<img src="/images/StColumbaFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>St Columba Church</h2>
<p>Hillson Drive, Fareham PO15 6PF
<p><a href="https://goo.gl/maps/S1aBSyarwJz5SjpP8" target="_">(map)</a> 
<a href="http://www.htscf.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="stpandp" style="display:none">
<img src="/images/StPeterStPaulFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>St Peter &amp; St Paul Church</h2>
<p>Osborn Road, Fareham PO16 7DR
<p><a href="https://goo.gl/maps/pyjW4KwnZpwtmq4W9" target="_">(map)</a> 
</div>

<div class="churchdata" id="lutheran" style="display:none">
<img src="/images/OurSaviourLutheranChurchFareham.jpg" align="left" style="padding-right: 20px">
<h2>Our Saviour Lutheran Church</h2>
<p>20B Highlands Road, Fareham PO16 7XN
<p><a href="https://goo.gl/maps/xCNaGwigpywRxxiK9" target="_">(map)</a> 
<a href="http://oslc.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="sacredheart" style="display:none">
<img src="/images/SacredHeartChurchFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Sacred Heart Catholic Church</h2>
<p>Portland Street, Fareham PO16 0NF
<p><a href="https://goo.gl/maps/MCpo1itfd4ziRFp98" target="_">(map)</a> 
<a href="http://www.catholicchurchfareham.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="stphiliphoward" style="display:none">
<img src="/images/ph-church-1999-5a.jpg" width="200" align="left" style="padding-right: 20px">
<h2>St Philip Howard Catholic Church</h2>
<p>Bishopsfield Road, Fareham PO14 1QS
<p><a href="https://goo.gl/maps/sTh5tT9vznSMyJkEA" target="_">(map)</a> 
<a href="http://www.catholicchurchfareham.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="gateway" style="display:none">
<img src="/images/Gateway.jpeg" width="200" align="left" style="padding-right: 20px">
<h2>Gateway Church Fareham</h2>
<p>The King's Centre, 171-173 West Street, Fareham PO16 0EF
<p><a href="https://goo.gl/maps/6wuAJVWyKQidVneJA" target="_">(map)</a> 
<a href="https://www.farehamcommunitychurch.com/" target="_">(website)</a>
</div>

<div class="churchdata" id="livingword" style="display:none">
<img src="/images/livingword.jpg" width="200" align="left" style="padding-right: 20px">
<h2>Living Word Church Fareham</h2>
<p>18 High Street, Titchfield, Fareham PO14 4AF
<p><a href="https://goo.gl/maps/3cefN3o5dbCNCAWA6" target="_">(map)</a> 
<a href="https://livingwordchurchnetwork.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="christchurch" style="display:none">
<img src="/images/christchurch.png" align="left" style="padding-right: 20px">
<h2>Christ Church Fareham</h2>
<p>Orchard Lea Junior School, Kennedy Avenue, Fareham PO15 6BJ
<p><a href="https://goo.gl/maps/FceztEvxoWKHk8KJ8" target="_">(map)</a> 
<a href="https://christchurchfareham.co.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="westendchapel" style="display:none">
<img src="/images/WestEndChapelFareham.jpg" width="200" align="left" style="padding-right: 20px">
<h2>West End Chapel</h2>
<p>St Anne's Grove, Fareham PO14 1JX
<p><a href="https://goo.gl/maps/PKA5BtgQQfyj8E7W9" target="_">(map)</a> 
<a href="http://www.westendchapelfareham.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="goodneighbours" style="display:none">
<img src="/images/FGN-Logo-2020.png" width="200" align="left" style="padding-right: 20px">
<h2>Fareham Good Neighbours</h2>
<a href="http://www.farehamgoodneighbours.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="basicsbank" style="display:none">
<img src="/images/BasicsBank.jpg" width="200" height="200" align="left" style="padding-right: 20px">
<h2>Fareham Basics Bank</h2>
<p>Aspect House, Westbury Road, Fareham PO16 7XU
<p><a href="https://goo.gl/maps/kKPMzaNMRi2a3eYw6" target="_">(map)</a> 
<a href="https://friendsofthehomeless.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="lovecherish" style="display:none">
<img src="/images/logo-love-and-cherish-1.png" width="200" align="left" style="padding-right: 20px">
<h2>Love and Cherish Marriage Preparation</h2>
<a href="https://www.loveandcherish.org.uk/" target="_">(website)</a>
</div>

<div class="churchdata" id="christianaid" style="display:none">
<img src="/images/calogo.gif" width="200" align="left" style="padding-right: 20px">
<h2>Christian Aid</h2>
<a href="https://www.christianaid.org.uk/" target="_">(website)</a>
</div>

</div>
<div id="menu">
<ul>
<li><a href="?id=urc" onclick="show('urc')">Fareham United Reformed Church</a>
<li><a href="#" onclick="show('methodist')">Fareham Methodist Church</a>
<li><a href="#" onclick="show('baptist')">Fareham Baptist New Life Church</a>
<li><a href="#" onclick="show('hpbaptist')">Hill Park Baptist Church</a>
<li><a href="#" onclick="show('stjohns')">St John's Church</a>
<li><a href="#" onclick="show('trinity')">Holy Trinity Church</a>
<li><a href="#" onclick="show('stcolumba')">St Columba Church</a>
<li><a href="#" onclick="show('stpandp')">St Peter &amp; St Paul Church</a>
<li><a href="#" onclick="show('lutheran')">Our Saviour Lutheran Church</a>
<li><a href="#" onclick="show('sacredheart')">Sacred Heart Catholic Church</a>
<li><a href="#" onclick="show('stphiliphoward')">St Philip Howard Catholic Church</a>
<li><a href="#" onclick="show('gateway')">Gateway Church Fareham</a>
<li><a href="#" onclick="show('livingword')">Living Word Church Fareham</a>
<li><a href="#" onclick="show('christchurch')">Christ Church Fareham</a>
<li><a href="#" onclick="show('westendchapel')">West End Chapel</a>
<li><a href="#" onclick="show('goodneighbours')">Fareham Good Neighbours</a>
<li><a href="#" onclick="show('basicsbank')">Fareham Basics Bank</a>
<li><a href="#" onclick="show('lovecherish')">Love and Cherish</a>
<li><a href="#" onclick="show('christianaid')">Christian Aid</a>
</ul>
</div>
</div>
</body>
</html>