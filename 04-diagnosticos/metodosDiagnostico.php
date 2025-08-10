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
            
            $sql = "INSERT INTO DIAGNOSTICOS(descripcion, fecha, idPaciente, idMedico, gravedad, recomendaciones, tipoDeDiagnostico) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]','$datos[6]')";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function actualizarDatos($datos){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "UPDATE DIAGNOSTICOS SET descripcion = '$datos[0]', fecha = '$datos[1]', idPaciente = '$datos[2]', idMedico = '$datos[3]', gravedad = '$datos[4]', recomendaciones = '$datos[5]', tipoDeDiagnostico = '$datos[6]' WHERE idDiagnostico = '$datos[7]'";
            
            return $result = mysqli_query($conexion, $sql);
        }
        
        public function eliminarDatos($id){
            $c = new conectar(); //Nos conectamos a la clase que contiene el SQL
            $conexion = $c ->conexion(); //Función dentro de la clase Conectar que captura todas las variables
            
            $sql = "DELETE FROM DIAGNOSTICOS WHERE idDiagnostico = '$id'";
            
            return $result = mysqli_query($conexion, $sql);
        }
    }
?>