<?php
    class conectar{
        //Creamos las variables de conexión
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $bd = "BD_Hospital";
        private $puerto = "3306";

        public function conexion(){
            $conexion = mysqli_connect(
                $this -> servidor,
                $this -> usuario,
                $this -> password,
                $this -> bd,
                $this -> puerto
            );
            return $conexion;
        }
    }
?>