<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Examen Java</title>
</head>
<body>
    
</body>
</html>
<?php
include('Conexion.php');

error_reporting(0);

$count = 0;

$p11 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 11 AND Correcto = 1");
while($row11 = mysqli_fetch_assoc($p11)){
    $r11 = $_POST['resP11'] == $row11['Respuesta'] ? $count++ : "";
}
$p12 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 12 AND Correcto = 1");
while($row12 = mysqli_fetch_assoc($p12)){
    $r12 = $_POST['resP12'] == $row12['Respuesta'] ? $count++ : "";
}
$p13 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 13 AND Correcto = 1");
while($row13 = mysqli_fetch_assoc($p13)){
    $r13 = $_POST['resP13'] == $row13['Respuesta'] ? $count++ : "";
}
$p14 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 14 AND Correcto = 1");
while($row14 = mysqli_fetch_assoc($p14)){
    $r14 = $_POST['resP14'] == $row14['Respuesta'] ? $count++ : "";
}
$p15 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 15 AND Correcto = 1");
while($row15 = mysqli_fetch_assoc($p15)){
    $r15 = $_POST['resP15'] == $row15['Respuesta'] ? $count++ : "";
}
$p16 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 16 AND Correcto = 1");
while($row16 = mysqli_fetch_assoc($p16)){
    $r16 = $_POST['resP16'] == $row16['Respuesta'] ? $count++ : "";
}
$p17 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 17 AND Correcto = 1");
while($row17 = mysqli_fetch_assoc($p17)){
    $r17 = $_POST['resP17'] == $row17['Respuesta'] ? $count++ : "";
}
$p18 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 18 AND Correcto = 1");
while($row18 = mysqli_fetch_assoc($p18)){
    $r18 = $_POST['resP18'] == $row18['Respuesta'] ? $count++ : "";
}
$p19 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 19 AND Correcto = 1");
while($row19 = mysqli_fetch_assoc($p19)){
    $r19 = $_POST['resP19'] == $row19['Respuesta'] ? $count++ : "";
}
$p20 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 2 AND idPregunta = 20 AND Correcto = 1");
while($row20 = mysqli_fetch_assoc($p20)){
    $r20 = $_POST['resP20'] == $row20['Respuesta'] ? $count++ : "";
}

$intentos = mysqli_query($conexion, "SELECT * FROM Examenes WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1");

while($rowI = mysqli_fetch_assoc($intentos)){
    if($rowI['IntentosDos'] != NULL){
        
        $qIntent = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadDos = $count, IntentosDos = IntentosDos + 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
        
        if($rowI['IntentosDos'] < 2){
            if($count < 8){
                echo ("<script> 
        
                swal('Calificacion Reporbatoria!', 'Haga click en el boton para continuar!', 'error')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioUsuario.php';
                    } else {
                        window.location='/SeminarioDB/InicioUsuario.php';
                    }
                });
            
                </script>");
            } else {
                echo ("<script> 
        
                swal('Calificacion Aprobatoria!', 'Haga click en el boton para continuar!', 'success')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioUsuario.php';
                    } else {
                        window.location='/SeminarioDB/InicioUsuario.php';
                    }
                });
            
                </script>");
            }
        } else {
            $delCuenta1 = mysqli_query($conexion, "DELETE FROM Examenes WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1 ");
            $delCuenta2 = mysqli_query($conexion, "DELETE FROM RegistroUsuCurso WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1 ");
            $delCuenta3 = mysqli_query($conexion, "DELETE FROM RegistroActCurso WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1");
            echo ("<script> 
        
                swal('Tu cuenta sera Eliminada del Curso!', 'No has pasado el Examen', 'error')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioUsuario.php';
                    } else {
                        window.location='/SeminarioDB/InicioUsuario.php';
                    }
                });
            
                </script>");
        }
    } else if($rowI['IntentosDos'] == NULL){
        if($count < 8){
            echo ("<script> 
        
                swal('Calificacion Reporbatoria!', 'Haga click en el boton para continuar!', 'error')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioUsuario.php';
                    } else {
                        window.location='/SeminarioDB/InicioUsuario.php';
                    }
                });
            
            </script>");
        } else {
            echo ("<script> 
        
                swal('Calificacion Aprobatoria!', 'Haga click en el boton para continuar!', 'success')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioUsuario.php';
                    } else {
                        window.location='/SeminarioDB/InicioUsuario.php';
                    }
                });
            
            </script>");
        }
        $qGeneral = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadDos = $count, IntentosDos = 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
    }
}

?>