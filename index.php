<!DOCTYPE html>
<html>
	<head>
		<?php require 'time.php'; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="<?php echo $clock; ?>">
		<h1 class="time">It is <?=$timedisplay?></h1>
		<p id="timezone">Time Zone: <?=$timezone?></p>
		<img src="http://making-the-internet.s3.amazonaws.com/php-<?php echo $clock; ?>.png" class="photo">
	</body>
</html>