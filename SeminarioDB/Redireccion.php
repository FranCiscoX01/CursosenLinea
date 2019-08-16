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


    $usu = $_POST['username'];
    $pass = $_POST['password'];

    $_SESSION['usuario'] = $usu;

    $admin = mysqli_query($conexion, "SELECT * FROM LoginUsuarios WHERE Username='".$usu."' AND Password='".$pass."' LIMIT 1");

    if(mysqli_num_rows($admin) > 0){
        if($usu == "admin" && $pass == "admin"){
            echo ("<script> 
        
                swal('Usuario valido!', 'Haga click en el boton para continuar!', 'success')
                .then((value) => {
                    if(value){
                        window.location='/SeminarioDB/InicioAdmin.php';
                    } else {
                        window.location='/SeminarioDB/InicioAdmin.php';
                    }
                });
            
            </script>");
        } else {
            echo ("<script> 
        
                swal('Usuario valido!', 'Haga click en el boton para continuar!', 'success')
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
        echo ("<script> 
        
            swal('Usuario No encontrado!', 'Haga click en el boton para continuar!', 'error')
            .then((value) => {
                if(value){
                    window.location='/SeminarioDB/';
                } else {
                    window.location='/SeminarioDB/';
                }
            });
        
        </script>");
    }
    mysqli_close($conexion);
    ?>






</body>
</html>