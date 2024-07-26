<?php
//VARIABLE USUARIO
$correo=$_POST['correo'];
//VARIABLE CONTRASEÑA
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

//CONEXION A LA BASE DE DATOS
include('conexion.php');

//CONSULTA A LA BASE DE DATOS
$consulta="SELECT*FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:principal.php");
}else{
    ?>
    <?php
    include ("login.php");
    echo "<script>alert('Datos incorrectos, intenta de nuevo !')</script>";
    exit();
}
mysqli_free_result($resultado);
mysqli_close($conexion);