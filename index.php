<?php
	echo '<b>Date and time classes :</b>'.'</br>';

	// Convert to timetamps
	$start = strtotime('2018-01-01 00:00:00');
	$end = strtotime('2020-01-01 00:00:00');

	$date1 = new DateTime(date("d.m.Y H:i:s",mt_rand($start, $end)));// Generate random number using above bounds
	echo $date1->format('d.m.Y H:i:s').'</br>';

	$date2 = new DateTime(date("d.m.Y H:i:s",mt_rand($start, $end)));// Generate random number using above bounds
	echo $date2->format('d.m.Y H:i:s').'</br>';

	$interval = $date2->diff($date1);
	echo 'Years = '.$interval->y.' Month = '.$interval->m.' Days = '.$interval->d.' / '.' Hours = '.$interval->h.' Minutes = '.$interval->i.' Seconds = '.$interval->s.'</br>';// Showing difference between dates
	echo 'Whole days = '.$interval->days.'</br>';

	$interval1 = new DateInterval('P1D');// Set the period
	$period = new DatePeriod($date1,$interval1,$interval->days);
	foreach ($period as $dt) {
		echo $dt->format('d.m.Y').' || ';// Display all dates at intervals
	}

?>