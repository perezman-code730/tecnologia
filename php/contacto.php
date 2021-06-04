<?php

   /*  error_reporting(0);*/
   
   $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
   $mail = isset($_POST["mail"])?$_POST["mail"] :"";
   $phone = isset($_POST["phone"])?$_POST["phone"] :"";
   $mensaje = isset($_POST["mensaje"])?$_POST["mensaje"] :"";
   if(isset($_POST["envio"])){

   echo "<br/> El nombre es: $nombre" ;
   echo "<br/> El mail es: $mail" ;
   echo "<br/> La phone es: $phone";
   echo "<br/> El mensaje es:$mensaje";
}    
?>

   
