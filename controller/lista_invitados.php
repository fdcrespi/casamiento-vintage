<?php
include('conexion.php'); // Incluye el archivo de conexión

// Consulta SQL para obtener el listado de personas
$sql = "SELECT * FROM invitados";
$result = $conn->query($sql);

// Comprobar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Loop para mostrar cada persona
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"]. " - Edad: " . $row["edad"]. "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
