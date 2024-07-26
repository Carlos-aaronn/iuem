<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $apellido1 = htmlspecialchars(trim($_POST['apellido-1']));
        $apellido2 = htmlspecialchars(trim($_POST['apellido-2']));
        $telefono = htmlspecialchars(trim($_POST['telefono']));
        $email = htmlspecialchars(trim($_POST['email']));
        $acta = htmlspecialchars(trim($_POST['actaNacimiento']));
        $curp = htmlspecialchars(trim($_POST['curp']));
        $ine = htmlspecialchars(trim($_POST['ine']));
        $comprobante = htmlspecialchars(trim($_POST['comprobanteDomicilio']));
        /*$certificado = htmlspecialchars(trim($_POST['certificadoPreparatoria']));*/
        $certificadoPreparatoria = isset($_POST['certificadoPreparatoria']);
        $turno = htmlspecialchars(trim($_POST['turno']));
        $carrera = htmlspecialchars(trim($_POST['carrera']));
        $status = htmlspecialchars(trim($_POST['status']));

        // Verifica si el checkbox fue marcado
        if (isset($_POST['actaNacimiento'])) {
            $acta = 1; // El checkbox está marcado
        } else {
            $acta = 0; // El checkbox no está marcado
        } if (isset($_POST['curp'])) {
            $curp = 1; // El checkbox está marcado
        } else {
            $curp = 0; // El checkbox no está marcado
        }if (isset($_POST['ine'])) {
            $ine = 1; // El checkbox está marcado
        } else {
            $ine = 0; // El checkbox no está marcado
        } if (isset($_POST['comprobanteDomicilio'])) {
            $comprobante = 1; // El checkbox está marcado
        } else {
            $comprobante = 0; // El checkbox no está marcado
        } if (isset($_POST['certificadoPreparatoria'])) {
            $certificado = 1; // El checkbox está marcado
        } else {
            $certificado = 0; // El checkbox no está marcado
        }
        
        //CONEXION A LA BASE DE DATOS
        include('conexion.php');
        
        //CONSULTA SQL
        $sql = "INSERT INTO inscripcion (nombre, apellido_paterno, apellido_materno, telefono, correo, acta, curp, ine, comprobante, certificado, estatus, carrera, turno) VALUES ('$nombre', '$apellido1', '$apellido2', '$telefono', '$email', '$acta', '$curp', '$ine', '$comprobante', '$certificado', '$status', '$carrera', '$turno')";
        $stmt = $conexion->prepare($sql);
        
        // Ejecutar la declaración SQL
        if ($stmt->execute()) {
            echo '<script type="text/javascript"> alert("Registro Exitoso !"); window.location.href="principal.php";</script>';
        } else {
            echo "Error: ". $sql. "<br>". $stmt->error;
        }
    }
?>