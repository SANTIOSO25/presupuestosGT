<?php
include('conexion.php'); // Incluye el archivo de conexión

// Establecer la codificación de caracteres a utf8
mysqli_set_charset($conexion, "utf8");

$query = "SELECT Nombre, Codigo_IATA FROM Bases";
$result = mysqli_query($conexion, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$options = "";

while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option>" . $row['Nombre'] . " (" . $row['Codigo_IATA'] . ")</option>";
}

// Añadimos un pequeño mensaje para confirmar que el script PHP ha finalizado correctamente
echo $options;
echo "Opciones generadas correctamente";
?>
