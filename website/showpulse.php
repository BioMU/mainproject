<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="5; url=http://192.168.1.130/biomu/showpulse.php">
    <meta name="keywords" content="jQuery Gauge, Gauge, Radial Gauge, jqxGauge" />
    <meta name="description" content="jqxGauge allows the users to quickly and easy check the current value
    in a specific range using pointer inside a radial gauge. In this demo " />
    <title id='Description'>In this sample is illustrated how to dynamically update the Gauge's value.</title>
    <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxchart.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxgauge.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqxslider.js"></script>
    <script type="text/javascript" src="scripts/demos.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {         
            $('#gauge').jqxGauge({
                ranges: [{ startValue: 0, endValue: 130, style: { fill: '#4cb848', stroke: '#4cb848' }, startDistance: 0, endDistance: 0 },
                         { startValue: 130, endValue: 180, style: { fill: '#fad00b', stroke: '#fad00b' }, startDistance: 0, endDistance: 0 },
                         { startValue: 180, endValue: 220, style: { fill: '#e53d37', stroke: '#e53d37' }, startDistance: 0, endDistance: 0}],
                cap: { size: '5%', style: { fill: '#2e79bb', stroke: '#2e79bb'} },
                border: { style: { fill: '#8e9495', stroke: '#7b8384', 'stroke-width': 1 } },
                ticksMinor: { interval: 5, size: '5%' },
                ticksMajor: { interval: 20, size: '10%' },       
                labels: { position: 'outside', interval: 20 },
                pointer: { style: { fill: '#2e79bb' }, width: 5 },
                animationDuration: 1500
            });
			// load value from the database
			loaddata();
			// re-load data
			setTimeout(function(){
				loaddata();
			}, 10000);
        });
		//
		function loaddata() {
			//alert("loading data");
			$.get( "getpulse.php", function( pulseRate ) {
				$('#gauge').jqxGauge('value', pulseRate);
				
			});
		}
    </script>
</head>
<body class='default'>
	<h2>Pulse for Astronaut Mike</h2>
    <div class="demo-gauge" style="position: relative; height: 380px;">
        <div id='gauge' style="position: absolute; top: 0px; left: 0px;">
        </div>
        <div id='slider' style="position: absolute; top: 250px; left: 93px">
        </div>
    </div>
</body>
</html>