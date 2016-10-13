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
	

	<?php
	
		{;
	?>
	<h1>Data from patient</h1>
		<?php 
			};
		?>
	<table id='data' width="500" border="i">
	<tr>
	  <td width='50' bgcolor="yellow">TIMES</td>
	  <td width='131' bgcolor="yellow">NAME</td>
	  <td width='80' bgcolor="yellow">SYSTOLIC</td>
	  <td width='80' bgcolor="yellow">DIASTOLIC</td>
	  <td width='80' bgcolor="yellow">HEARTBEAT</td>
	</tr>

	<?php
	  while($row = mysql_fetch_array($tb))
		{
	?>
	<tr>
		<td bgcolor="white"><?php echo $row[0]; ?></td>
		<td bgcolor="white"><?php echo $row[1]; ?></td>
		<td bgcolor="white"><?php echo $row[2]; ?></td>
		<td bgcolor="white"><?php echo $row[3]; ?></td>
		<td bgcolor="white"><?php echo $row[4]; ?></td>
	</tr>
	<?php
		}
	?>
	</table>
	<div id='right'>
 	<a class='sort' href="#Sort"><p>Today</p></a>
	<a class='sort' href="#Sort"><p>Nearest 3 days</p></a>
	<a class='sort' href="#Sort"><p>Nearest week</p></a>
	<a class='sort' href="#Sort"><p>Nearest 2 weeks</p></a>
	<a class='sort' href="#Sort"><p>Nearest month</p></a>
	<a class='sort' href="#Sort"><p>Nearest 2 months</p></a>
	<a class='sort' href="#Sort"><p>Nearest 4 months</p></a>
	<a class='sort' href="#Sort"><p>Others</p></a>
</div>
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

	
	</table>

</div>

</body>
</html>

