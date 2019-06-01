<?php

use App\Enrollment;

function todayIsEnrollment() {

	$enrollment = Enrollment::all();
	$latest = Enrollment::latest()->get()->first();

	if($enrollment->count()){
		/*if( now() >= $enrollment->start_date || now() <= $enrollment->start_date) && 
		(now() <= $enrollment->end_date)*/
		if (( now() >= $latest->start_date || now() <= $latest->start_date) &&
		 (now() <= $latest->end_date) || 
			($latest->start_date < $latest->end_date) && 
			(now() <= $latest->start_date && now() <= $latest->end_date)) {
			return true;
	}
}
}

function checkSchedule($start, $end) {

	$firstSched = $end;
	if ($start <700 && $start < $firstSched) {
		echo "conflicting schedule...";
		echo "START IS ".$start;
	}
	elseif ($end >1800 || $end < $start) {
		echo "conflicting schedule...";
		echo "END IS ".$end;
	}
	elseif ($start >= $endSched && $start >= 700 && $end >= $start && $end<=1800) {
		$ins = "INSERT INTO `sched` (`startTime`, `endTime`) VALUES ('".$start."', '".$end."')";
		$result = mysqli_query($con, $ins);
		if ($result) {
			echo "FIRST SCHED IS ".$start." to ".$end;
			$endSched = $end;
		}
		else{
		}
	}
	else{
		echo "There's a conflict with the schedule!";
	}
}