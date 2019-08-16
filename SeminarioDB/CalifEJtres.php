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

$p21 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 21 AND Correcto = 1");
while($row21 = mysqli_fetch_assoc($p21)){
    $r21 = $_POST['resP21'] == $row21['Respuesta'] ? $count++ : "";
}
$p22 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 22 AND Correcto = 1");
while($row22 = mysqli_fetch_assoc($p22)){
    $r22 = $_POST['resP22'] == $row22['Respuesta'] ? $count++ : "";
}
$p23 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 23 AND Correcto = 1");
while($row23 = mysqli_fetch_assoc($p23)){
    $r23 = $_POST['resP23'] == $row23['Respuesta'] ? $count++ : "";
}
$p24 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 24 AND Correcto = 1");
while($row24 = mysqli_fetch_assoc($p24)){
    $r24 = $_POST['resP24'] == $row24['Respuesta'] ? $count++ : "";
}
$p25 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 25 AND Correcto = 1");
while($row25 = mysqli_fetch_assoc($p25)){
    $r25 = $_POST['resP25'] == $row25['Respuesta'] ? $count++ : "";
}
$p26 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 26 AND Correcto = 1");
while($row26 = mysqli_fetch_assoc($p26)){
    $r26 = $_POST['resP26'] == $row26['Respuesta'] ? $count++ : "";
}
$p27 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 27 AND Correcto = 1");
while($row27 = mysqli_fetch_assoc($p27)){
    $r27 = $_POST['resP27'] == $row27['Respuesta'] ? $count++ : "";
}
$p28 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 28 AND Correcto = 1");
while($row28 = mysqli_fetch_assoc($p28)){
    $r28 = $_POST['resP28'] == $row28['Respuesta'] ? $count++ : "";
}
$p29 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 29 AND Correcto = 1");
while($row29 = mysqli_fetch_assoc($p29)){
    $r29 = $_POST['resP29'] == $row29['Respuesta'] ? $count++ : "";
}
$p30 = mysqli_query($conexion, "SELECT Respuesta FROM Respuestas WHERE idCurso = 1 AND Unidad = 3 AND idPregunta = 30 AND Correcto = 1");
while($row30 = mysqli_fetch_assoc($p30)){
    $r30 = $_POST['resP30'] == $row30['Respuesta'] ? $count++ : "";
}

$intentos = mysqli_query($conexion, "SELECT * FROM Examenes WHERE Username = '".$_SESSION['usuario']."' AND idCurso = 1");

while($rowI = mysqli_fetch_assoc($intentos)){
    if($rowI['IntentosTres'] != NULL){
        
        $qIntent = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadTres = $count, IntentosTres = IntentosTres + 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
        
        if($rowI['IntentosTres'] < 2){
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
    } else if($rowI['IntentosTres'] == NULL){
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
        $qGeneral = mysqli_query($conexion, "UPDATE Examenes SET CaliUnidadTres = $count, IntentosTres = 1 WHERE Username = '".$_SESSION['usuario']."' AND idCUrso = 1");
    }
}
?>