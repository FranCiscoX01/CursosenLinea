<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Cambios</title>
</head>
<body>
    
</body>
</html>
<?php
include('Conexion.php');  

error_reporting(0);


// echo $_POST['CNombre']."<br>";
// echo $_POST['CApP']."<br>";
// echo $_POST['CApM']."<br>";
// echo $_POST['Ccarrera'];
// $idC = $_POST['Ccarrera'];

$verify = mysqli_query($conexion, "SELECT * FROM RegistroUsu");

$verify2 = mysqli_query($conexion, "SELECT * FROM RegistroUsu WHERE Username = '".$_SESSION['usuario']."'");
while($v2 = mysqli_fetch_assoc($verify2)){
    $idC = empty($_POST['Ccarrera']) ? $idC = $v2['idCarrera'] : $idC = $_POST['Ccarrera'];
}
// echo $idC;

while($v = mysqli_fetch_assoc($verify)){
    if($v['Nombre'] == $_POST['CNombre'] && $v['ApellidoP'] == $_POST['CApP'] && $v['ApellidoM'] == $_POST['CApM'] && $v['idCarrera'] == $idC){
        echo ("<script> 
                    swal('No se Realizaron cambios!', 'No se detectaron Cambios!', 'warning')
                    .then((value) => {
                        if(value){
                            window.location='/SeminarioDB/InicioUsuario.php';
                        } else {
                            window.location='/SeminarioDB/InicioUsuario.php';
                        }
                    });
                    </script>");
    } else if($v['Nombre'] == $_POST['CNombre'] || $v['ApellidoP'] == $_POST['CApP'] || $v['ApellidoM'] == $_POST['CApM'] || $v['idCarrera'] == $idC){
        $change = mysqli_query($conexion, "UPDATE RegistroUsu SET Nombre = '".$_POST['CNombre']."', ApellidoP = '".$_POST['CApP']."', ApellidoM = '".$_POST['CApM']."', idCarrera = $idC WHERE Username = '".$_SESSION['usuario']."'");
        if($change){
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
        }
    }
}

?>