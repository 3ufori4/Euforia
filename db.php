<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
// datos de la base de datos
$servername = "localhost";
$database = "formulario";
$username = "shaday";
$password = "123";

// recuperación de variables
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Teléfono = $_POST['Teléfono'];
$Mensaje = $_POST['Mensaje'];

// conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// SQL para insertar datos
$sql = "INSERT INTO formulario (Nombre, Email, Teléfono, Mensaje) VALUES ('$Nombre', '$Email', '$Teléfono', '$Mensaje')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro Completado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// cerrar la conexión
mysqli_close($conexion);
?>

<button><a href="./Contacto.html">Regresar al inicio</a></button>

</body>
</html>
