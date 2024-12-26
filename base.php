<?php
     // Configuración de la base de datos
    $servername = "localhost";

    $username = "root";
    $password = "";
    $dbname = "casamiento";

    
    /* $username = "id20804695_fedecrespi";
    $password = "EstefiFede518*";
    $dbname = "id20804695_casamiento";
    */

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    function conectar() {
        global $conn;
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }
        return $conn;   
    }

    function desconectar() {
        global $conn;
        $conn->close();
    }

    function agregarInvitado($nombre, $apellido, $acompaniantes = null, $confirmado, $comida = null) {
        $conn = conectar();
        $sql = "INSERT INTO invitados (nombre, apellido, acompaniantes, confirmado, comida) VALUES ('$nombre', '$apellido', '$acompaniantes', '$confirmado', '$comida')";
        if ($conn->query($sql) === TRUE) {
           return true;
        } else {
           //echo "Error: " . $sql . "<br>" . $conn->error;
           return false;
        }
        desconectar();
    }

?>