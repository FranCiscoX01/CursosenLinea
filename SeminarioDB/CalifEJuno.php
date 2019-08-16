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

$p1 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 1 AND Correcto = 1");
while($row1 = mysqli_fetch_assoc($p1)){
    $r1 = $_POST['resP1'] == $row1['Respuesta'] ? $count++ : "";
}
$p2 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 2 AND Correcto = 1");
while($row2 = mysqli_fetch_assoc($p2)){
    $r2 = $_POST['resP2'] == $row2['Respuesta'] ? $count++ : "";
}
$p3 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 3 AND Correcto = 1");
while($row3 = mysqli_fetch_assoc($p3)){
    $r3 = $_POST['resP3'] == $row3['Respuesta'] ? $count++ : "";
}
$p4 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 4 AND Correcto = 1");
while($row4 = mysqli_fetch_assoc($p4)){
    $r4 = $_POST['resP4'] == $row4['Respuesta'] ? $count++ : "";
}
$p5 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 5 AND Correcto = 1");
while($row5 = mysqli_fetch_assoc($p5)){
    $r5 = $_POST['resP5'] == $row5['Respuesta'] ? $count++ : "";
}
$p6 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 6 AND Correcto = 1");
while($row6 = mysqli_fetch_assoc($p6)){
    $r6 = $_POST['resP6'] == $row6['Respuesta'] ? $count++ : "";
}
$p7 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 7 AND Correcto = 1");
while($row7 = mysqli_fetch_assoc($p7)){
    $r7 = $_POST['resP7'] == $row7['Respuesta'] ? $count++ : "";
}
$p8 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 8 AND Correcto = 1");
while($row8 = mysqli_fetch_assoc($p8)){
    $r8 = $_POST['resP8'] == $row8['Respuesta'] ? $count++ : "";
}
$p9 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 9 AND Correcto = 1");
while($row9 = mysqli_fetch_assoc($p9)){
    $r9 = $_POST['resP9'] == $row9['Respuesta'] ? $count++ : "";
}
$p10 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 1 AND idPregunta = 10 AND Correcto = 1");
while($row10 = mysqli_fetch_assoc($p10)){
    $r10 = $_POST['resP10'] == $row10['Respuesta'] ? $count++ : "";
}

$intentos = mysqli_query($conexion, "SELECT * FROM Examenes WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1");

while($rowI = mysqli_fetch_assoc($intentos)){
    if($rowI['IntentosUno'] != NULL){
        
        $qIntent = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadUno = $count, IntentosUno = IntentosUno + 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
        
        if($rowI['IntentosUno'] < 2){
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
    } else if($rowI['IntentosUno'] == NULL){
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
        $qGeneral = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadUno = $count, IntentosUno = 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
    }
}

?>