<?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "tiendita";
     $con = new mysqli($dbhost, $dbuser,$dbpass) or die("Error al conectar a la BD". $con -> error);
     mysqli_select_db($con, $db);

     return $con;
     }
     
    function CloseCon($con)
     {
     $con -> close();
     }
?>