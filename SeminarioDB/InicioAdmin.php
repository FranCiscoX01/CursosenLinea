<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Inicio</title>
</head>
<?php
include('Conexion.php');
$consultaRegistro = mysqli_query($conexion, "
    SELECT Nombre, ApellidoP, ApellidoM, Username, Correo, Pass, Fecha, Hora, Carrera from RegistroUsu as a 
    INNER JOIN Carreras as b WHERE a.idCarrera = b.idCarrera
");
$consultaCarrera = mysqli_query($conexion, "SELECT * FROM Carreras");
$consultaCurso = mysqli_query($conexion, "SELECT * FROM Cursos");
$consultaCursoUsuario = mysqli_query($conexion, "SELECT * FROM RegistroUsuCurso");

?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="InicioAdmin.php"><i class="material-icons">account_circle</i>&nbsp;<?php echo $_SESSION['usuario']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="InicioUsuario.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="CerrarSesion.php">Logout</a>
            </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <center><h3><span class="badge badge-secondary">Registro de Usuarios</span></h3></center>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Username</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Carrera</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($rowG = mysqli_fetch_assoc($consultaRegistro)) {
                        echo "
                        <tr>
                            <th scope='row'>".$rowG['Nombre']."</th>
                            <td>".$rowG['ApellidoP']."</td>
                            <td>".$rowG['ApellidoM']."</td>
                            <td>".$rowG['Username']."</td>
                            <td>".$rowG['Correo']."</td>
                            <td>".$rowG['Pass']."</td>
                            <td>".$rowG['Fecha']."</td>
                            <td>".$rowG['Hora']."</td>
                            <td>".$rowG['Carrera']."</td>
                            <td><a href='Delete.php?user=".$rowG['Username']."&correo=".$rowG['Correo']."' class='text-decoration-none'><button type='button' class='btn btn-outline-danger'>Eliminar</button></a></td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <br>
        <center>
            <div class="row">
                <div class="col">
                    <table class="table table-hover">
                    <h3><span class="badge badge-secondary text-left">Carreras</span></h3>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Carrera</th>
                                <th scope="col">Carrera</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($rowCar = mysqli_fetch_assoc($consultaCarrera)) {
                                    echo "
                                    <tr>
                                        <th scope='row'>".$rowCar['idCarrera']."</th>
                                        <td>".$rowCar['Carrera']."</td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-hover">
                    <h3><span class="badge badge-secondary">Cursos</span></h3>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Curso</th>
                                <th scope="col">Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($rowCur = mysqli_fetch_assoc($consultaCurso)) {
                                    echo "
                                    <tr>
                                        <th scope='row'>".$rowCur['idCurso']."</th>
                                        <td>".$rowCur['Curso']."</td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table table-hover">
                    <h3><span class="badge badge-secondary">Registro de Usuarios en Cursos</span></h3>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Curso Actual</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($rowGC = mysqli_fetch_assoc($consultaCursoUsuario)) {
                                    echo "
                                    <tr>
                                        <th scope='row'>".$rowGC['Username']."</th>
                                        <td>".$rowGC['idCurso']."</td>
                                        <td><a href='Delete.php?user2=".$rowGC['Username']."&curso=".$rowGC['idCurso']."' class='text-decoration-none'><button type='button' class='btn btn-outline-danger'>Eliminar</button></a></td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </div>
</body>
</html>