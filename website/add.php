<?php
   include("connection.php");
   echo "add php<br>";
   $link=Conection();
$Sql="insert into tempmoi (temp1,moi1)  values ('".$_GET["temp1"]."', '".$_GET["moi1"]."')";
echo "Sql=" . $Sql . "<br>";
   mysqli_query($link,$Sql);
   header("Location: insertareg.php");
?>