<?php
include('Conexion.php');
$query = mysqli_query($conexion, "SELECT * FROM Carreras");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<script type="text/javascript" charset="utf-8">
    function isNumberKey(evt){
         var charCode = (evt.which) ? evt.which : event.keyCode
         if ((charCode < 97 || charCode > 122) && (charCode < 48 || charCode > 57)){
            return false;
         }
         return true;
    }
</script>
<script>
    function comprobarEmail() {
        $.ajax({
        url: "RegistrarUsuario.php",
        data:'email='+$("#email").val(),
        type: "POST",
        success:function(data){
            $("#ValidarEmail").html(data);
        },
        error:function (){}
        });
    }
    function comprobarUsuario() {
        $.ajax({
        url: "RegistrarUsuario.php",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
            $("#ValidarUsuario").html(data);
        },
        error:function (){}
        });
    }
</script>
<body>
<center><h1 class="display-4">Registro</h1></center>
<div class="container mt-5 pt-5">
        <div class="card mx-auto border-0">
            <div class="card-body pb-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-register">
                        <form method="POST" id="Form1" action="RegistrarUsuario.php">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control shadow p-3 mb-5 bg-white rounded" required autofocus>
                            </div>

                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" name="app" id="app" class="form-control shadow p-3 mb-5 bg-white rounded" required>
                            </div>

                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" name="apm" id="apm" class="form-control shadow p-3 mb-5 bg-white rounded" required>
                            </div>

                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" name="username" id="username" class="form-control shadow p-3 mb-5 bg-white rounded" onBlur="comprobarUsuario()" onkeypress="return isNumberKey(this);" maxlength="10" required>
                                <span id="ValidarUsuario"></span>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control shadow p-3 mb-5 bg-white rounded" onBlur="comprobarEmail()" required>
                                <span id="ValidarEmail"></span>
                            </div>

                            <div class="form-group">
                                <input type="text" name="defaulpass" id="defaulpass" class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Contraseña por defecto: 12345" readonly>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Carrera</label>
                                <select class="form-control shadow p-3 mb-5 bg-white rounded" id="carrera" name="carrera">
                                    <option value=""></option>
                                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                                        <option value="<?= $row['idCarrera']  ?>"><?= $row['Carrera']  ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="text-center pt-2 pb-1">
                                <button type="submit" id="registroU" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
