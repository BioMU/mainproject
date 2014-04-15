<?php
	// send without http headers
	header("Content-Type: text/plain");
	// get mysql credentials
	include("connection.php");
	$link = Conection();
	// create sql
	$sql = "SELECT * FROM biomu.sensordata order by SensorDataID desc limit 1";
	// get result
	$result = mysqli_query($link,$sql);
	// parse result
	while($row = mysqli_fetch_array($result)) {
		$str = '[{"pulse":' . $row['Pulse'] . ',"color":"green"},';
		$str .= '{"gsr":' . $row['GSR'] . ',"color":"green"},';
		$str .= '{"temp":' . $row['Temperature'] . ',"color":"yellow"},';
		$str .= '{"o2":' . $row['O2'] . ',"color":"yellow"},';
		$str .= '{"suitpressure":' . $row['SuitPressure'] . ',"color":"green"},';
		$str .= '{"bloodpressure":"' . $row['BloodSystolic'] . '/' . $row['BloodDiastolic'] . '","color":"yellow"},';
		$str .= '{"radiation":' . $row['Radiation'] . ',"color":"yellow"}]';
	}
	echo $str;
?>