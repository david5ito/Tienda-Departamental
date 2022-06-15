<?php
    require 'conex.php'; 

    class Datos{
        
        //propiedades 
        public $nombre = '';
        public $precio = 0;

        function __construct($n, $p)
        {
            $this->nombre = $n;
            $this->precio = $p;
        } 
        
        public function getDatos($intid){
            
        }
    }


    $query = "SELECT * FROM `producto` WHERE idProducto = 1";
    $resultado = mysqli_query($conectar, $query);

    while($fila = mysqli_fetch_array($resultado)){
        $nombre = $fila['nombre'];
        $precio = $fila['precio'];
    }
    
?>