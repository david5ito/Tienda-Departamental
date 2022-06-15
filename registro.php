<?php
    require 'conex.php'; 

    $nombre = $_POST['nombre'];
    $aP = $_POST['apellidoP'];
    $aM = $_POST['apellidoM'];
    $correo = $_POST['correo'];
    $tel = $_POST['telefono'];
          
    $insert = "INSERT INTO  cliente(nombre, apellidoPaterno, apellidoMaterno, correo, telefono, idCarritoCompra, idDireccion ) VALUES ('$nombre', '$aP', '$aM', '$correo', '$tel', 1, 1)";

    $query = mysqli_query($conectar, $insert);

    if($query){
        header("location:Menu.php");
    }else{
        echo "No jala";
    }

    /*class BD{
        
        public  function Registrar()
        {
            require 'conex.php'; 

            $nombre = $_POST['nombre'];
            $aP = $_POST['apellidoP'];
            $aM = $_POST['apellidoM'];
            $correo = $_POST['correo'];
            $tel = $_POST['telefono'];

            $insert = "INSERT INTO  cliente(nombre, apellidoPaterno, apellidoMaterno, correo, telefono, idCarritoCompra, idDireccion ) VALUES ('$nombre,', '$aP', '$aM', '$correo', '$tel', 1, 1)";

            $query = mysqli_query($conectar, $insert);

            if($query){
                header("location:Menu.html");
            }else{
                echo "No jala";
            }
        }
    }*/ //End Class
?>