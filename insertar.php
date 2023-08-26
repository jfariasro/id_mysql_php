<?php

require_once 'conexion.php';

if (isset($_POST['Registrar'])) {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $edad = mysqli_real_escape_string($conexion, $_POST['edad']);

    $insertar = "INSERT INTO persona(id, nombre, edad)
    VALUES(NULL, '$nombre', '$edad')";

    $ejecutar = mysqli_query($conexion, $insertar);

    $resultado = mysqli_affected_rows($conexion);
}

// $id = mysqli_insert_id($conexion);
// echo 'ULTIMO ID INSERTADO: ' . $id;
// echo '<br>';

if (isset($resultado)) {
    if ($resultado > 0) {
        $id = mysqli_insert_id($conexion);
        echo 'ULTIMO ID INSERTADO: ' . $id;
    } else {
        echo 'ERROR AL REGISTRAR EL ULTIMO ID';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre de la Persona" required>
        <br><br>

        <input type="number" name="edad" id="edad" min="1" placeholder="Ingresar Edad de la Persona" required>
        <br><br>

        <input type="submit" value="Registrar" name="Registrar">
    </form>
</body>

</html>