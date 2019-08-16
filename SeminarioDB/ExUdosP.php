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
    <title>Examen Unidad 2</title>
</head>
<body>
<?php
        include('Conexion.php');

        $preguntas11 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=41");
        $respuestas11 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=41 ORDER BY RAND()");
        
        $preguntas12 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=42");
        $respuestas12 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=42 ORDER BY RAND()");

        $preguntas13 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=43");
        $respuestas13 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=43 ORDER BY RAND()");

        $preguntas14 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=44");
        $respuestas14 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=44 ORDER BY RAND()");

        $preguntas15 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=45");
        $respuestas15 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=45 ORDER BY RAND()");

        $preguntas16 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=46");
        $respuestas16 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=46 ORDER BY RAND()");

        $preguntas17 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=47");
        $respuestas17 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=47 ORDER BY RAND()");

        $preguntas18 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=48");
        $respuestas18 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=48 ORDER BY RAND()");

        $preguntas19 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=49");
        $respuestas19 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=49 ORDER BY RAND()");

        $preguntas20 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=2 AND Unidad=2 AND idPregunta=50");
        $respuestas20 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=2 AND Unidad=2 AND idPregunta=50 ORDER BY RAND()");

        //$gen = mysqli_query($conexion, "SELECT Pregunta, Respuesta FROM Preguntas INNER JOIN Respuestas WHERE Respuestas.idPregunta = Preguntas.idPregunta ORDER BY RAND()");
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
        <form action="CalifEPdos.php" method="POST">
            <p></p>
            <?php
                while($pre11 = mysqli_fetch_assoc($preguntas11)){
                    echo "<strong><label>1. ".$pre11['Pregunta']."</label></strong><br>";
                    while($res11 = mysqli_fetch_assoc($respuestas11)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP11' id='resP11' value='".$res11['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res11['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre12 = mysqli_fetch_assoc($preguntas12)){
                    echo "<strong><label>2. ".$pre12['Pregunta']."</label></strong><br>";
                    while($res12 = mysqli_fetch_assoc($respuestas12)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP12' id='resP12' value='".$res12['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res12['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre13 = mysqli_fetch_assoc($preguntas13)){
                    echo "<strong><label>3. ".$pre13['Pregunta']."</label></strong><br>";
                    while($res13 = mysqli_fetch_assoc($respuestas13)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP13' id='resP13' value='".$res13['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res13['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre14 = mysqli_fetch_assoc($preguntas14)){
                    echo "<strong><label>4. ".$pre14['Pregunta']."</label></strong><br>";
                    while($res14 = mysqli_fetch_assoc($respuestas14)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP14' id='resP14' value='".$res14['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res14['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre15 = mysqli_fetch_assoc($preguntas15)){
                    echo "<strong><label>5. ".$pre15['Pregunta']."</label></strong><br>";
                    while($res15 = mysqli_fetch_assoc($respuestas15)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP15' id='resP15' value='".$res15['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res15['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre16 = mysqli_fetch_assoc($preguntas16)){
                    echo "<strong><label>6. ".$pre16['Pregunta']."</label></strong><br>";
                    while($res16 = mysqli_fetch_assoc($respuestas16)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP16' id='resP16' value='".$res16['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res16['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre17 = mysqli_fetch_assoc($preguntas17)){
                    echo "<strong><label>7. ".$pre17['Pregunta']."</label></strong><br>";
                    while($res17 = mysqli_fetch_assoc($respuestas17)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP17' id='resP17' value='".$res17['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res17['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre18 = mysqli_fetch_assoc($preguntas18)){
                    echo "<strong><label>8. ".$pre18['Pregunta']."</label></strong><br>";
                    while($res18 = mysqli_fetch_assoc($respuestas18)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP18' id='resP18' value='".$res18['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res18['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre19 = mysqli_fetch_assoc($preguntas19)){
                    echo "<strong><label>9. ".$pre19['Pregunta']."</label></strong><br>";
                    while($res19 = mysqli_fetch_assoc($respuestas19)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP19' id='resP19' value='".$res19['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res19['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre20 = mysqli_fetch_assoc($preguntas20)){
                    echo "<strong><label>10. ".$pre20['Pregunta']."</label></strong><br>";
                    while($res20 = mysqli_fetch_assoc($respuestas20)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP20' id='resP20' value='".$res20['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res20['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
            ?>
            <br>
            <br>
            <center><input class="btn btn-outline-success" type="submit" value="Submit"></center>
            <br>
        </form>
    </div>
</body>
</html>