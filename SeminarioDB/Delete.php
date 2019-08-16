<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Emilinar</title>
</head>
<body>
    
</body>
</html>
<?php
include('Conexion.php');


if(!(empty($_GET['user']) && empty($_GET['correo']))){
    $elimR = mysqli_query($conexion, "DELETE FROM RegistroUsu WHERE Username = '".$_GET['user']."' AND Correo = '".$_GET['correo']."'");
    $elimL = mysqli_query($conexion, "DELETE FROM LoginUsuarios WHERE Username = '".$_GET['user']."'");
    $elimRAC = mysqli_query($conexion, "DELETE FROM RegistroActCurso WHERE Username = '".$_GET['user']."'");
    $elimRUC = mysqli_query($conexion, "DELETE FROM RegistroUsuCurso WHERE Username = '".$_GET['user']."'");
    $elimEx = mysqli_query($conexion, "DELETE FROM Examenes WHERE Username = '".$_GET['user']."'");
    echo "<script>
    swal({
        title: 'Se elimino el registro Correctamente!',
        text: 'You clicked the button to Continue!',
        icon: 'success',
        button: 'OK!',
      }).then((value) => {
            window.location='/SeminarioDB/InicioAdmin.php';
      });
    
    </script>";
} else if(!(empty($_GET['user2']) && empty($_GET['curso']))){
    $elimRAC2 = mysqli_query($conexion, "DELETE FROM RegistroActCurso WHERE Username = '".$_GET['user2']."'");
    $elimRUC2 = mysqli_query($conexion, "DELETE FROM RegistroUsuCurso WHERE Username = '".$_GET['user2']."'");
    $elimEx2 = mysqli_query($conexion, "DELETE FROM Examenes WHERE Username = '".$_GET['user2']."' AND idCurso = ".$_GET['curso']."");
    echo "<script>
    swal({
        title: 'Se elimino el registro Correctamente!',
        text: 'You clicked the button to Continue!',
        icon: 'success',
        button: 'OK!',
      }).then((value) => {
        window.location='/SeminarioDB/InicioAdmin.php';
    });
    
    </script>";
}
?>