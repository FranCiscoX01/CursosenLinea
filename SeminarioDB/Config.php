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
    <title>Configuracion</title>
</head>
<body>
<?php 
include('Conexion.php');  
$query = mysqli_query($conexion, "SELECT * FROM Carreras");
$modify = mysqli_query($conexion, "SELECT * FROM RegistroUsu WHERE Username = '".$_SESSION['usuario']."'");

$query2 = mysqli_query($conexion, "SELECT Carrera FROM Carreras INNER JOIN RegistroUsu WHERE RegistroUsu.idCarrera = Carreras.idCarrera AND RegistroUsu.Username = '".$_SESSION['usuario']."'");
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
                <a class="nav-link" href="Config.php">Configuration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="CerrarSesion.php">Logout</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <center><h1>Configuracion</h1></center>
        <form method="POST" action="SaveChange.php">
            <?php while($rowG = mysqli_fetch_assoc($modify)) { ?>
                <div class="form-group">
                    <label for="inputAddress">Nombre</label>
                    <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="CNombre" name="CNombre" value="<?php echo $rowG['Nombre']; ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Apellido Paterno</label>
                    <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="CApP" name="CApP" value="<?php echo $rowG['ApellidoP']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido Materno</label>
                    <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="CApM" name="CApM" value="<?php echo $rowG['ApellidoM']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Carrera</label>
                    <select class="form-control shadow p-3 mb-5 bg-white rounded" id="Ccarrera" name="Ccarrera">
                        <?php while($rowC = mysqli_fetch_assoc($query2)) { ?>
                            <option selected disabled value="<?php echo $rowG['idCarrera']; ?>"><?php echo $rowC['Carrera'] ?></option>
                        <?php } ?>
                        <?php while($row = mysqli_fetch_assoc($query)) { ?>
                            <option value="<?= $row['idCarrera']  ?>"><?= $row['Carrera']  ?></option>
                        <?php } ?>
                    </select>
                    </div>
                <center><button type="submit" class="btn btn-primary">Guardar Cambios</button></center>
            <?php } ?>
        </form>
    </div>
</body>
</html>