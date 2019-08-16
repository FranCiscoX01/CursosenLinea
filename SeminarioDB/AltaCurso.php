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
    <?php
        include('Conexion.php');

        $insertar = mysqli_query($conexion, "INSERT INTO RegistroUsuCurso (idCursoUsu, Username, idCurso) VALUES(NULL, '".$_GET['usua']."', ".$_GET['curso'].")");
        $insertar2 = mysqli_query($conexion, "INSERT INTO RegistroActCurso (Username, idCurso, Act1, Act2, Act3, Act4, Act5, Act6, Act7, Act8, Act9, Act10, Act11, Act12, Act13, Act14, Act15) 
        VALUES ('".$_GET['usua']."', ".$_GET['curso'].", 'x', 'x', 'x','x', 'x', 'x','x', 'x','x','x', 'x', 'x','x','x', 'x')");
        $insertar3 = mysqli_query($conexion, "INSERT INTO Examenes (Username, idCurso) VALUES('".$_GET['usua']."', ".$_GET['curso'].")");
        
        if($insertar && $insertar2 && $insertar3){
            echo ("<script> 
        
                swal('Inscripcion Aprovada!', 'Haga click en el boton para continuar!', 'success')
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
</body>
</html>