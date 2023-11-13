<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>result</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="rcontainer">
<div class="about">
	<div class="logo">
		<img src="img/clogo.png">
	</div>
	<div class="school"><h3>
		<?php echo $schoolDetail['schoolName']; ?> <br>
		<center><div class="h5">school&nbsp;terminal&nbsp;report</div></center>
	</h3></div>
</div>

<header>
	<div>
		<p>name: <span class="underline detail"><?php echo $studentDetail['fname']." ".$studentDetail['mname']." ".$studentDetail['lname']  ?></span></p>
		<p>class: <span class="underline"><?php echo $class ?></span></p>
		<p>term: <span class="underline"><?php echo $term ; ?><sup>st</sup></span></p>
	</div>
	<div>
		<p>session: <span class="underline"><?php echo $session ?></span></p>
		<p>term&nbsp;ended: <span class="underline"><?php echo $schoolDetail['termEnds']; ?></span></p>
		<p>next&nbsp;term&nbsp;begins: <span class="underline"><?php echo $schoolDetail['termBegins']; ?></span></p>
	</div>
</header>

	<div class="subjects-score">
	<center>
	<table border="1" cellspacing="0" cellpadding="3" width="100%">
		<tr>
			<th>subjects</th>
			<th>1&nbsp;<sup>c.a</sup>&nbsp;(20)</th>
			<th>1&nbsp;<sup>c.a</sup>&nbsp;(20)</th>
			<th>exam&nbsp;(60)</th>
			<th>total&nbsp;(100)</th>
			<th>position</th>
			<th>grade</th>
			<th>teacher's&nbsp;comment</th>
			<th>teacher's&nbsp;signature</th>
		</tr>