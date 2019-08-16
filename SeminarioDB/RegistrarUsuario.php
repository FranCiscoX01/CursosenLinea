<?php
include('Conexion.php');

error_reporting(0);

if(!empty($_POST['email'])) {
    $query3 = "SELECT * FROM RegistroUsu WHERE Correo='".$_POST['email']."'";
    $ejecut = mysqli_query($conexion, $query3);
    $user_count = mysqli_num_rows($ejecut);
    if($user_count > 0) {
        echo "<span class='text-danger font-italic'> Email no Disponible.</span>";
    }else{
        echo "<span class='text-success font-weight-bold'> Email Disponible.</span>";
    }
}
if(!empty($_POST['username'])) {
    $query4 = "SELECT * FROM RegistroUsu WHERE Username='".$_POST['username']."'";
    $ejecut2 = mysqli_query($conexion, $query4);
    $user_count2 = mysqli_num_rows($ejecut2);
    if($user_count2 > 0) {
        echo "<span class='text-danger font-italic'> Usuario no Disponible.</span>";
    }else{
        echo "<span class='text-success font-weight-bold'> Usuario Disponible.</span>";
    }
}

// -----------------------------------------------------------------------------

$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = "12345";
$fechaHoy = date('Y-m-d');
$horaHoy = date('H:m:s');
$idcarrera = $_POST['carrera'];

if(!empty($nombre) && !empty($app) && !empty($apm) && !empty($username) && !empty($idcarrera)){
    $query = "INSERT INTO RegistroUsu (	Nombre, ApellidoP, 	ApellidoM, Username, Correo, Pass, Fecha, Hora, idCarrera) VALUES (
        '$nombre', '$app', '$apm', '$username', '$email', $pass, '$fechaHoy', '$horaHoy', $idcarrera
    )";
    $eje = mysqli_query($conexion, $query);

    $InsertLog = "INSERT INTO  LoginUsuarios (idLoginUsu, Username, Password) VALUES(NULL, '$username', '12345')";
    $eje2 = mysqli_query($conexion, $InsertLog);
    echo "<script> window.location='/SeminarioDB/index.html'; </script>";
}

?>