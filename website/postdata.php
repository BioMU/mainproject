<?php
	error_log("querystring: " . $_SERVER['QUERY_STRING'], 0);
	// define variables
	$uid = 1001;
	$gsr = 0;
	$temp = 0;
	$pulse = 0;
	$o2 = 0;
	$suitpressure = 4.7;
	$systolic = 0;
	$diastolic = 0;
	$posX = 0;
	$posY = 0;
	$posZ = 0;
	$radiation = 0;
	// ensure we have a querystring
	if (empty($_GET)) {
		echo "usage: <a href='postdata.php?uid=1001&gsr=100&temp=100&pulse=100&o2=100&suitpressure=100&bloodpressure=100&posX=100&posY=100&posZ=1007&radiation=100'>postdata.php?uid=1001&gsr=100&temp=100&pulse=100&o2=100&suitpressure=100&bloodpressure=100&posX=100&posY=100&posZ=1007&radiation=100</a>";
	} else {
		// assign variables
		if (!empty($_GET['uid'])) {$uid = $_GET['uid'];}
		if (!empty($_GET['gsr'])) {$gsr = $_GET['gsr'];}
		if (!empty($_GET['temp'])) {$temp = $_GET['temp'];}
		if (!empty($_GET['pulse'])) {$pulse = $_GET['pulse'];}
		if (!empty($_GET['o2'])) {$o2 = $_GET['o2'];}
		if (!empty($_GET['suitpressure'])) {$suitpressure = $_GET['suitpressure'];}
		if (!empty($_GET['systolic'])) {$systolic = $_GET['systolic'];}
		if (!empty($_GET['diastolic'])) {$diastolic = $_GET['diastolic'];}
		if (!empty($_GET['posX'])) {$posX = $_GET['posX'];}
		if (!empty($_GET['posY'])) {$posY = $_GET['posY'];}
		if (!empty($_GET['posZ'])) {$posZ = $_GET['posZ'];}
		if (!empty($_GET['radiation'])) {$radiation = $_GET['radiation'];}
		// show results
		echo "uid=" . $uid . "<br>";
		echo "gsr=" . $gsr . "<br>";
		echo "temp=" . $temp . "<br>";
		echo "pulse=" . $pulse . "<br>";
		echo "o2=" . $o2 . "<br>";
		echo "suitpressure=" . $suitpressure . "<br>";	
		echo "systolic=" . $systolic . "<br>";
		echo "diastolic=" . $diastolic . "<br>";	
		echo "posX=" . $posX . "<br>";	
		echo "posY=" . $posY . "<br>";	
		echo "posZ=" . $posZ . "<br>";	
		echo "radiation=" . $radiation . "<br>";
	}
	
	// save results!
	if (!empty($_GET['pulse'])) {
		echo "<hr>saving data...";
		//error_log("saving data...");
		// sql
		$sql = "insert into sensordata (AstroID, Pulse, GSR, Temperature, O2, SuitPressure, BloodSystolic, BloodDiastolic, PosX, PosY, PosZ, Radiation) ";
		$sql .= "values(1001," . $pulse . ", " . $gsr . ", " . $temp . ", " . $o2 . ", " . $suitpressure . ", " . $systolic . "," . $diastolic;
		$sql .= ", " . $posX . ", " . $posY . ", " . $posZ . ", " . $radiation . ")";
		echo "<br>sql=" . $sql . "<br>";
		error_log("sql=" . $sql);
		include("connection.php");
		$link = Conection();
		mysqli_query($link, $sql);
		echo "<br>inserted";
		//error_log("done");
	}
?>