<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="30; url=http://127.0.0.1/biomu/thehub.php">
	<title>The Hub</title>
	<style>
		body {
			font-size:40px;
			font-family: Verdana, Arial, sans-serif;
		}
		h1 {
			font-size:50px;
		}
		h3 {
			font-size:18px;
		}
		.good {
			color:green;
		}
		.bad {
			color:gold;
		}
		.ugly {
			color:red;
			font-weight: bold;
			text-decoration:blink;
		}		
	</style>
</head>
<body>
	<table border=0>
		<tr>
			<td><img src="images/nasa100.gif" width=100 height=100></td>
			<td><h1>Health stats for astronaut Charlie Sheen</h1></td>
		</tr>
	</table>
	<table border=0 cellpadding=0 cellspacing=5>
<?php
	// get mysql credentials
	include("connection.php");
	$link = Conection();
	// create sql
	$sql = "SELECT * FROM biomu.sensordata order by SensorDataID desc limit 1";
	// get result
	$result = mysqli_query($link,$sql);
	// parse result
	while($row = mysqli_fetch_array($result)) {
		// pulse
		$val = $row['Pulse'];
		if ($val < 100) $class = "good";
		elseif ($val < 140) $class = "bad";
		else $class = "ugly";
		echo "<tr><td>Pulse</td><td class=" . $class . ">" . $row['Pulse'] . " bpm</td></tr>";
		// GSR
		$val = $row['GSR'];
		if ($val <= 10) $class = "good";
		elseif ($val <= 15) $class = "bad";
		else $class = "ugly";
		echo "<tr><td>Galvanic Skin Response&nbsp;&nbsp;&nbsp;</td><td class=" . $class . ">" . $row['GSR'] . " &mu;S</td></tr>";
		// temp
		$val = $row['Temperature'];
		if ($val <= 95 || $val > 104) $class = "ugly";
		elseif ($val > 97 && $val <= 100) $class = "bad";
		else $class = "good";
		echo "<tr><td>Temperature</td><td class=" . $class . ">" . $row['Temperature'] . "&deg; F</td></tr>";
		// O2
		echo "<tr><td>Oxygen Saturation</td><td class=good>" . $row['O2'] . "%</td></tr>";
		// suit pressure
		$val = $row['SuitPressure'];
		if ($val <= 2 || $val > 6) $class = "ugly";
		elseif ($val > 2 && $val <= 4) $class = "bad";
		else $class = "good";
		echo "<tr><td>Suit Pressure</td><td class=" . $class . ">" . $row['SuitPressure'] . " psi</td></tr>";
		// blood pressure
		$val = $row['BloodSystolic'];
		if ($val <= 105 || $val > 155) $class = "ugly";
		elseif ($val > 120 && $val <= 130) $class = "bad";
		else $class = "good";
		echo "<tr><td>Blood Pressure</td><td class=good>" . $row['BloodSystolic'] . "/" . $row['BloodDiastolic'] . " mm Hg</td></tr>";
		// pulse
		$val = $row['Radiation'];
		if ($val < 50) $class = "good";
		elseif ($val < 75) $class = "bad";
		else $class = "ugly";
		echo "<tr><td>Radiation</td><td class=" . $class . ">" . $row['Radiation'] . "%</td></tr>";
		// Attitude
		echo "<tr><td>Attitude</td><td class=good>Yaw: " . $row['PosX'] . "&deg; Pitch: " . $row['PosY'] . "&deg; Roll: " . $row['PosZ'] . "&deg;</td></tr>";	
	}
?>
	</table>
<p><h3>Last Updated:
<?php
$date = new DateTime();
echo date_format($date, 'Y-m-d H:i:s');
?>
</h3>
</body>
</html>