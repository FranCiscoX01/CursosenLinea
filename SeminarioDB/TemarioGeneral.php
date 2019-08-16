<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include('Conexion.php');

$act1 = isset($_POST['Act1']) ? $act1 = "o" : $act1 = "x";
$act2 = isset($_POST['Act2']) ? $act2 = "o" : $act2 = "x";
$act3 = isset($_POST['Act3']) ? $act3 = "o" : $act3 = "x";
$act4 = isset($_POST['Act4']) ? $act4 = "o" : $act4 = "x";
$act5 = isset($_POST['Act5']) ? $act5 = "o" : $act5 = "x";
$act6 = isset($_POST['Act6']) ? $act6 = "o" : $act6 = "x";
$act7 = isset($_POST['Act7']) ? $act7 = "o" : $act7 = "x";
$act8 = isset($_POST['Act8']) ? $act8 = "o" : $act8 = "x";
$act9 = isset($_POST['Act9']) ? $act9 = "o" : $act9 = "x";
$act10 = isset($_POST['Act10']) ? $act10 = "o" : $act10 = "x";
$act11 = isset($_POST['Act11']) ? $act11 = "o" : $act11 = "x";
$act12 = isset($_POST['Act12']) ? $act12 = "o" : $act12 = "x";
$act13 = isset($_POST['Act13']) ? $act13 = "o" : $act13 = "x";
$act14 = isset($_POST['Act14']) ? $act14 = "o" : $act14 = "x";
$act15 = isset($_POST['Act15']) ? $act15 = "o" : $act15 = "x";

$cambios = mysqli_query($conexion, "UPDATE RegistroActCurso SET Act1='".$act1."', Act2='".$act2."', Act3='".$act3."', Act4='".$act4."',
Act5='".$act5."', Act6='".$act6."', Act7='".$act7."', Act8='".$act8."', Act9='".$act9."', Act10='".$act10."', Act11='".$act11."',
Act12='".$act12."', Act13='".$act13."', Act14='".$act14."', Act15='".$act15."' WHERE Username='".$_SESSION['usuario']."' AND idCurso=".$_POST['idCurso']."");

//echo $_POST['idCurso'];

if($cambios){
    echo ("<script> 

        swal('Cambios Guardados!', 'Haga click en el boton para continuar!', 'success')
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

    swal('Error en Inscripcion!', 'Haga click en el boton para continuar!', 'error')
    .then((value) => {
        if(value){
            window.location='/SeminarioDB/InicioUsuario.php';
        } else {
            window.location='/SeminarioDB/InicioUsuario.php';
        }
    });

</script>");
}

?>