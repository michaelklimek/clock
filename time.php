<?php
	//set timezone to CST
	date_default_timezone_set('America/Chicago');
	$timezone = date_default_timezone_get();

	//set time to 24 hour day
	$time = date('G:i');

	//calculate the different times of day and output the type
	if ($time >= '5:00' && $time <= '10:59') {
		$clock = 'morning';
	}
	elseif ($time >= '11:00 am' && $time <= '15:59 pm') {
		$clock = 'afternoon';
	}
	elseif ($time >= '16:00 pm' && $time <= '19:59pm') {
		$clock = 'evening';
	}
	else {
		$clock = 'night';
	}

	//display the time in 12 hour mode with am/pm
	$timedisplay = date('g:ia');

?>