<?php
    class metodos{
        public function mostrarDatos($sql){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            $result = mysqli_query($conexion, $sql); //Es un método que recibe 2 parámetros: conexión y la consulta
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function insertarDatos($datos){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "INSERT INTO PACIENTES(nombre, apellido, fechaNacimiento, genero, telefono, direccion, tipoDeSangre) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]','$datos[6]')";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function actualizarDatos($datos){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "UPDATE PACIENTES SET nombre = '$datos[0]', apellido = '$datos[1]', fechaNacimiento = '$datos[2]', genero = '$datos[3]', telefono = '$datos[4]', direccion = '$datos[5]', tipoDeSangre = '$datos[6]' WHERE idPaciente = '$datos[7]'";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function eliminarDatos($id){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "DELETE FROM PACIENTES WHERE idPaciente = '$id'";
            
            return $result = mysqli_query($conexion, $sql);
        }
    }
?>