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
    <title>Examen Unidad 3</title>
</head>
<body>
<?php
        include('Conexion.php');

        $preguntas21 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=21");
        $respuestas21 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=21 ORDER BY RAND()");
        
        $preguntas22 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=22");
        $respuestas22 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=22 ORDER BY RAND()");

        $preguntas23 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=23");
        $respuestas23 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=23 ORDER BY RAND()");

        $preguntas24 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=24");
        $respuestas24 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=24 ORDER BY RAND()");

        $preguntas25 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=25");
        $respuestas25 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=25 ORDER BY RAND()");

        $preguntas26 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=26");
        $respuestas26 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=26 ORDER BY RAND()");

        $preguntas27 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=27");
        $respuestas27 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=27 ORDER BY RAND()");

        $preguntas28 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=28");
        $respuestas28 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=28 ORDER BY RAND()");

        $preguntas29 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=29");
        $respuestas29 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=29 ORDER BY RAND()");

        $preguntas30 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=3 AND idPregunta=30");
        $respuestas30 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=3 AND idPregunta=30 ORDER BY RAND()");

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
        <form action="CalifEJtres.php" method="POST">
            <p></p>
            <?php
                while($pre21 = mysqli_fetch_assoc($preguntas21)){
                    echo "<strong><label>1. ".$pre21['Pregunta']."</label></strong><br>";
                    while($res21 = mysqli_fetch_assoc($respuestas21)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP21' id='resP21' value='".$res21['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res21['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre22 = mysqli_fetch_assoc($preguntas22)){
                    echo "<strong><label>2. ".$pre22['Pregunta']."</label></strong><br>";
                    while($res22 = mysqli_fetch_assoc($respuestas22)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP22' id='resP22' value='".$res22['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res22['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre23 = mysqli_fetch_assoc($preguntas23)){
                    echo "<strong><label>3. ".$pre23['Pregunta']."</label></strong><br>";
                    while($res23 = mysqli_fetch_assoc($respuestas23)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP23' id='resP23' value='".$res23['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res23['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre24 = mysqli_fetch_assoc($preguntas24)){
                    echo "<strong><label>4. ".$pre24['Pregunta']."</label></strong><br>";
                    while($res24 = mysqli_fetch_assoc($respuestas24)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP24' id='resP24' value='".$res24['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res24['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre25 = mysqli_fetch_assoc($preguntas25)){
                    echo "<strong><label>5. ".$pre25['Pregunta']."</label></strong><br>";
                    while($res25 = mysqli_fetch_assoc($respuestas25)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP25' id='resP25' value='".$res25['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res25['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre26 = mysqli_fetch_assoc($preguntas26)){
                    echo "<strong><label>6. ".$pre26['Pregunta']."</label></strong><br>";
                    while($res26 = mysqli_fetch_assoc($respuestas26)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP26' id='resP26' value='".$res26['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res26['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre27 = mysqli_fetch_assoc($preguntas27)){
                    echo "<strong><label>7. ".$pre27['Pregunta']."</label></strong><br>";
                    while($res27 = mysqli_fetch_assoc($respuestas27)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP27' id='resP27' value='".$res27['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res27['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre28 = mysqli_fetch_assoc($preguntas28)){
                    echo "<strong><label>8. ".$pre28['Pregunta']."</label></strong><br>";
                    while($res28 = mysqli_fetch_assoc($respuestas28)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP28' id='resP28' value='".$res28['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res28['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre29 = mysqli_fetch_assoc($preguntas29)){
                    echo "<strong><label>9. ".$pre29['Pregunta']."</label></strong><br>";
                    while($res29 = mysqli_fetch_assoc($respuestas29)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP29' id='resP29' value='".$res29['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res29['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre30 = mysqli_fetch_assoc($preguntas30)){
                    echo "<strong><label>10. ".$pre30['Pregunta']."</label></strong><br>";
                    while($res30 = mysqli_fetch_assoc($respuestas30)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP30' id='resP30' value='".$res30['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res30['Respuesta']."</label>
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