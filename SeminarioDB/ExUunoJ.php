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
    <title>Examen Unidad 1</title>
</head>
<body>
<?php
        include('Conexion.php');

        $preguntas1 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=1");
        $respuestas1 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=1 ORDER BY RAND()");
        
        $preguntas2 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=2");
        $respuestas2 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=2 ORDER BY RAND()");

        $preguntas3 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=3");
        $respuestas3 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=3 ORDER BY RAND()");

        $preguntas4 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=4");
        $respuestas4 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=4 ORDER BY RAND()");

        $preguntas5 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=5");
        $respuestas5 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=5 ORDER BY RAND()");

        $preguntas6 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=6");
        $respuestas6 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=6 ORDER BY RAND()");

        $preguntas7 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=7");
        $respuestas7 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=7 ORDER BY RAND()");

        $preguntas8 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=8");
        $respuestas8 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=8 ORDER BY RAND()");

        $preguntas9 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=9");
        $respuestas9 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=9 ORDER BY RAND()");

        $preguntas10 = mysqli_query($conexion, "SELECT * FROM Preguntas WHERE idCurso=1 AND Unidad=1 AND idPregunta=10");
        $respuestas10 = mysqli_query($conexion, "SELECT * FROM Respuestas WHERE idCurso=1 AND Unidad=1 AND idPregunta=10 ORDER BY RAND()");

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
        <form action="CalifEJuno.php" method="POST">
            <p></p>
            <?php
                while($pre1 = mysqli_fetch_assoc($preguntas1)){
                    echo "<strong><label>1. ".$pre1['Pregunta']."</label></strong><br>";
                    while($res1 = mysqli_fetch_assoc($respuestas1)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP1' id='resP1' value='".$res1['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res1['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre2 = mysqli_fetch_assoc($preguntas2)){
                    echo "<strong><label>2. ".$pre2['Pregunta']."</label></strong><br>";
                    while($res2 = mysqli_fetch_assoc($respuestas2)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP2' id='resP2' value='".$res2['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res2['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre3 = mysqli_fetch_assoc($preguntas3)){
                    echo "<strong><label>3. ".$pre3['Pregunta']."</label></strong><br>";
                    while($res3 = mysqli_fetch_assoc($respuestas3)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP3' id='resP3' value='".$res3['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res3['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre4 = mysqli_fetch_assoc($preguntas4)){
                    echo "<strong><label>4. ".$pre4['Pregunta']."</label></strong><br>";
                    while($res4 = mysqli_fetch_assoc($respuestas4)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP4' id='resP4' value='".$res4['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res4['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre5 = mysqli_fetch_assoc($preguntas5)){
                    echo "<strong><label>5. ".$pre5['Pregunta']."</label></strong><br>";
                    while($res5 = mysqli_fetch_assoc($respuestas5)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP5' id='resP5' value='".$res5['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res5['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre6 = mysqli_fetch_assoc($preguntas6)){
                    echo "<strong><label>6. ".$pre6['Pregunta']."</label></strong><br>";
                    while($res6 = mysqli_fetch_assoc($respuestas6)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP6' id='resP6' value='".$res6['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res6['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre7 = mysqli_fetch_assoc($preguntas7)){
                    echo "<strong><label>7. ".$pre7['Pregunta']."</label></strong><br>";
                    while($res7 = mysqli_fetch_assoc($respuestas7)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP7' id='resP7' value='".$res7['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res7['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre8 = mysqli_fetch_assoc($preguntas8)){
                    echo "<strong><label>8. ".$pre8['Pregunta']."</label></strong><br>";
                    while($res8 = mysqli_fetch_assoc($respuestas8)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP8' id='resP8' value='".$res8['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res8['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre9 = mysqli_fetch_assoc($preguntas9)){
                    echo "<strong><label>9. ".$pre9['Pregunta']."</label></strong><br>";
                    while($res9 = mysqli_fetch_assoc($respuestas9)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP9' id='resP9' value='".$res9['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res9['Respuesta']."</label>
                            </div>
                        ";
                    }
                    echo "<br><br>";
                }
                while($pre10 = mysqli_fetch_assoc($preguntas10)){
                    echo "<strong><label>10. ".$pre10['Pregunta']."</label></strong><br>";
                    while($res10 = mysqli_fetch_assoc($respuestas10)){
                        echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='resP10' id='resP10' value='".$res10['Respuesta']."'>
                                <label class='form-check-label' for='inlineRadio1'>".$res10['Respuesta']."</label>
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