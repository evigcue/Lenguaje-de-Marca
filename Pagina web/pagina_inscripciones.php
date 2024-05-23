<?php
// Verificar si se han recibido datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    // También puedes obtener otros datos del formulario si los hay

    // Conectar a la base de datos (suponiendo que ya tienes la conexión establecida)
    $conexion = new mysqli("localhost", "root", "", "academiajose");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error al conectar con la base de datos: " . $conexion->connect_error);
    }

    // Preparar la consulta para insertar los datos en la tabla de inscripciones
    $consulta = $conexion->prepare("INSERT INTO solicitud_inscripciones (nombre, email) VALUES (?, ?)");
    
    // Vincular los parámetros con los valores del formulario
    $consulta->bind_param("ss", $nombre, $email);

    // Ejecutar la consulta
    if ($consulta->execute()) {
        echo "¡Inscripción realizada con éxito!";
    } else {
        echo "Error al realizar la inscripción: " . $consulta->error;
    }

    // Cerrar la consulta y la conexión
    $consulta->close();
    $conexion->close();
} else {
    echo "No se han recibido datos del formulario";
}
?>
