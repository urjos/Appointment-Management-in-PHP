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
            
            $sql = "INSERT INTO MEDICAMENTOS(nombre, dosis, frecuencia, duracion, idTratamiento, proveedor, efectosSecundarios) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]','$datos[6]')";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function actualizarDatos($datos){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "UPDATE MEDICAMENTOS SET nombre = '$datos[0]', dosis = '$datos[1]', frecuencia = '$datos[2]', duracion = '$datos[3]', idTratamiento = '$datos[4]', proveedor = '$datos[5]', efectosSecundarios = '$datos[6]' WHERE idMedicamento = '$datos[7]'";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function eliminarDatos($id){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "DELETE FROM MEDICAMENTOS WHERE idMedicamento = '$id'";
            
            return $result = mysqli_query($conexion, $sql);
        }
    }
?>