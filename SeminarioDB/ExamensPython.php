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
    <title>Examenes Python</title>
</head>
<body>
<?php
        include('Conexion.php');

        $habilitarE = mysqli_query($conexion, "SELECT * FROM RegistroActCurso WHERE idCurso=2 AND Username='".$_SESSION['usuario']."'");
        $ExCalInt = mysqli_query($conexion, "SELECT * FROM Examenes WHERE idCurso=2 AND Username='".$_SESSION['usuario']."'");
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="InicioUsuario.php"><i class="material-icons">account_circle</i>&nbsp;<?php echo $_SESSION['usuario']; ?></a>
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
            <li class="nav-item">
                <a class="nav-link" href="ExamensJava.php">Examenes</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php while($a = mysqli_fetch_assoc($habilitarE)) { ?>
            <?php while($b = mysqli_fetch_assoc($ExCalInt)) { ?>
                <center><h1><span class="badge badge-secondary">Examen Unidad 1</span></h1></center>
                <?php
                    if($a['Act1'] == "o" && $a['Act2'] == "o" && $a['Act3'] == "o" && $a['Act4'] == "o" && $a['Act5'] == "o" && $b['CaliUnidadUno'] < 8) {
                        echo "<a href='ExUunoP.php' class='text-decoration-none'><button type='button' class='btn btn-primary btn-lg btn-block'>Ir a Examen</button></a>";
                    } else {
                        if($a['Act1'] == "x" || $a['Act2'] == "x" || $a['Act3'] == "x" || $a['Act4'] == "x" || $a['Act5'] == "x" || $b['CaliUnidadUno'] >= 8 || $b['CaliUnidadUno'] == NULL){
                            echo "<button type='button' class='btn btn-secondary btn-lg btn-block'>Examen Bloqueado</button>";
                        }
                    }
                    echo ("
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Calificacion</label>
                            <input type='text' class='form-control' disabled value='".$b['CaliUnidadUno']."'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Intentos</label>
                            <input type='text' class='form-control' disabled value='".$b['IntentosUno']."'>
                        </div>
                    </div>
                    ");
                ?>
                <br>
                <br>

                <center><h1><span class="badge badge-secondary">Examen Unidad 2</span></h1></center>
                <?php
                    if($a['Act6'] == "o" && $a['Act7'] == "o" && $a['Act8'] == "o" && $a['Act9'] == "o" && $a['Act10'] == "o" && $b['CaliUnidadUno'] >= 8 && $b['CaliUnidadDos'] < 8) {
                        echo "<a href='ExUdosP.php' class='text-decoration-none'><button type='button' class='btn btn-primary btn-lg btn-block'>Ir a Examen</button></a>";
                    } else {
                        if($a['Act6'] == "x" || $a['Act7'] == "x" || $a['Act8'] == "x" || $a['Act9'] == "x" || $a['Act10'] == "x" || $b['CaliUnidadDos'] >= 8 || $b['CaliUnidadDos'] == NULL){
                            echo "<button type='button' class='btn btn-secondary btn-lg btn-block'>Examen Bloqueado</button>";
                        }
                    }
                    echo ("
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Calificacion</label>
                            <input type='text' class='form-control' disabled value='".$b['CaliUnidadDos']."'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Intentos</label>
                            <input type='text' class='form-control' disabled value='".$b['IntentosDos']."'>
                        </div>
                    </div>
                    ");
                ?>
                <br>
                <br>

                <center><h1><span class="badge badge-secondary">Examen Unidad 3</span></h1></center>
                <?php
                    if($a['Act11'] == "o" && $a['Act12'] == "o" && $a['Act13'] == "o" && $a['Act14'] == "o" && $a['Act15'] == "o"  && $b['CaliUnidadDos'] >= 8 && $b['CaliUnidadTres'] < 8) {
                        echo "<a href='ExUtresP.php' class='text-decoration-none'><button type='button' class='btn btn-primary btn-lg btn-block'>Ir a Examen</button></a>";
                    } else {
                        if($a['Act11'] == "x" || $a['Act12'] == "x" || $a['Act13'] == "x" || $a['Act14'] == "x" || $a['Act15'] == "x" || $b['CaliUnidadTres'] >= 8 || $b['CaliUnidadTres'] == NULL){
                            echo "<button type='button' class='btn btn-secondary btn-lg btn-block'>Examen Bloqueado</button>";
                        }
                    }
                    echo ("
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Calificacion</label>
                            <input type='text' class='form-control' disabled value='".$b['CaliUnidadTres']."'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label for='inputEmail4'>Intentos</label>
                            <input type='text' class='form-control' disabled value='".$b['IntentosTres']."'>
                        </div>
                    </div>
                    ");
                ?>
            <?php } ?>
        <?php } ?>
        <br>
        <br>
        <p>
        <br><br><br><br><br>
        </p>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Maximo de Intentos por Examen: 3</strong> -> Si no pasas tus examenes en los 3 intentos, se eliminara tu cuenta del Curso.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</body>
</html>