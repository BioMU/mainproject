<?php
function Conection(){
   if (!($link=mysqli_connect("127.0.0.1","BioMUApp","Sp8c3m8n!","BioMU")))  {
      exit();
   }
   return $link;
}
?>