<!DOCTYPE html>
<html lang='vi'>
<meta charset="UTF-8" title="Project">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id='menu'>
		<a href="#Term"><div class='options'>Term and Service</div></a>
		<a href="project_result.php"><div class='options'>See the result</div></a>
		<a href="project_daily.php"><div class='options'>Daily Information</div></a>
		<h1 id='head'>+   K3-BPM SERVICE</h1>
	</div>
	<img id='icon' src='BPM_logo.png'>
	<marquee align='center' direction='left' height='27px' width='100%' scrollamount='4'>
	WE WORK EVERYDAY TO BRING A BETTER HEALTHCARE SYSTEM TO EVERYBODY AROUND THIS PLANNET
	</marquee>
<div id='maincont'> 
	<?php
	mysql_connect("localhost","root","") or die("CAN'T CONNECT");
	mysql_select_db("myproject") or die("NO DB");
	$t = 'dulieudo';
	$tb = mysql_query("select * from dulieudo");

	?>
	
	<div id='mess'>Patient Cao Hoang Tung: 150 120 100 ***</div>
	<div id='mess'>Patient Nguyen Van A: 105 85 95</div>
	<div id='mess'>Patient Le Thi B: 100 90 90 </div>
</div>
<div id='list'>
	<?php
	mysql_connect("localhost","root","") or die("CAN'T CONNECT");
	mysql_select_db("myproject") or die("NO DB");

	$tb = mysql_query("select * from dulieudo");
	?>
		<h2>Registered patients</h2>
	 	<a href='#BN' class='patient'>Content</a>
		<a href='#BN' class='patient'>Content</a>
		<a href='#BN' class='patient'>Content</a>
		<a href='#BN' class='patient'>Content</a>
		<a href='#BN' class='patient'>Content</a>

	


</div>

</body>
</html>

