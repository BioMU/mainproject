<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php 
	echo '<p>Hello World</p>'; 
	$val = $_GET['value'];
	echo "val=" . $val . "<br>";//
	// code
	if ($val <= 2 || $val > 6) $class = "ugly";
	elseif ($val > 2 && $val <= 4) $class = "bad";
	else $class = "good";
	// show result
	echo $class;
?> 
 </body>
</html>