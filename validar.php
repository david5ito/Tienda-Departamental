<?php
include("conexion.php");

$correo = $_POST['email'];
$pass = $_POST['password'];
$con = OpenCon(); 

$consulta = "SELECT * FROM cliente where correo = '$correo'";

$resultado=mysqli_query($con, $consulta);
$filas=mysqli_num_rows($resultado);

//Correo
if($filas){
    header("location:Menu.php");
}
else{
    include("Login.html");
    ?>
    <h1 class="bad" style="color: #ffff" 
	font-family: 'Montserrat', sans-serif;>
        Error en la autenticacion
    </h1>
    <?php
}

//Password
if($pass != 12345){
    include("Login.html");
    ?>
    <h1 class="bad" style="color: #df4a64">
        Password incorrecto!!!
    </h1>
    <?php
}
else{
    header("location:Menu.html");
}

    CloseCon($con);
?>