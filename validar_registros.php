<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellido1 = htmlspecialchars(trim($_POST['apellido-1']));
    $apellido2 = htmlspecialchars(trim($_POST['apellido-2']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $cargo = htmlspecialchars(trim($_POST['cargo']));
    $contraseña = htmlspecialchars(trim($_POST['password']));

    //VALIDAMOS LOS CAMPOS
    if (empty($nombre) || empty($apellido1) || empty($apellido2) || empty($email) || empty($telefono) || empty($cargo) || empty($contraseña)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }

    //CONEXIÓN DE LA BASE DE DATOS
    include('conexion.php');

    //CONSULTA SQL
    $sql = "INSERT INTO usuarios (nombre, ap, am, correo, telefono, cargo, contraseña) VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$telefono', '$cargo', '$contraseña')";
    $stmt = $conexion->prepare($sql);
    // Ejecutar la declaración SQL
    if ($stmt->execute()) {
        echo '<script type="text/javascript"> alert("Registro Exitoso !"); window.location.href="registros.php";</script>';
    } else {
        echo "Error: ". $sql. "<br>". $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conexion->close();
}
?>