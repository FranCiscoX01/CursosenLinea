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
    <title>Curso de Java</title>
</head>
<body>
    <?php
        include('Conexion.php');

        $check = mysqli_query($conexion, "SELECT * FROM RegistroActCurso WHERE 	idCurso=2 AND Username='".$_SESSION['usuario']."'");
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
                <a class="nav-link" href="ExamensPython.php">Examenes</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <form method="POST" action="TemarioGeneral.php">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Temario</th>
                        <th scope="col">Actividad Completada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($checked = mysqli_fetch_assoc($check)) { ?>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tipos de Datos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">1.1</th>
                        <td>Tuplas, Listas y Diccionarios</td>
                        <td>
                            <?php
                                    if($checked['Act1'] == "x"){
                                        echo "<center><input id='Act1' name='Act1' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act1'] == "o"){
                                        echo "<center><input id='Act1' name='Act1' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1.2</th>
                        <td>Estructura de control de flujo, Bucles</td>
                        <td>
                            <?php
                                    if($checked['Act2'] == "x"){
                                        echo "<center><input id='Act2' name='Act2' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act2'] == "o"){
                                        echo "<center><input id='Act2' name='Act2' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1.3</th>
                        <td>Comprensiones de listas</td>
                        <td>
                            <?php
                                    if($checked['Act3'] == "x"){
                                        echo "<center><input id='Act3' name='Act3' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act3'] == "o"){
                                        echo "<center><input id='Act3' name='Act3' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1.4</th>
                        <td>Archivos</td>
                        <td>
                            <?php
                                    if($checked['Act4'] == "x"){
                                        echo "<center><input id='Act4' name='Act4' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act4'] == "o"){
                                        echo "<center><input id='Act4' name='Act4' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1.5</th>
                        <td>Expresiones regulares</td>
                        <td>
                            <?php
                                    if($checked['Act5'] == "x"){
                                        echo "<center><input id='Act5' name='Act5' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act5'] == "o"){
                                        echo "<center><input id='Act5' name='Act5' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Programación Funcional</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">2.1</th>
                        <td>Definición de una función</td>
                        <td>
                            <?php
                                    if($checked['Act6'] == "x"){
                                        echo "<center><input id='Act6' name='Act6' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act6'] == "o"){
                                        echo "<center><input id='Act6' name='Act6' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2.2</th>
                        <td>Llamada de la función</td>
                        <td>
                            <?php
                                    if($checked['Act7'] == "x"){
                                        echo "<center><input id='Act7' name='Act7' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act7'] == "o"){
                                        echo "<center><input id='Act7' name='Act7' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2.3</th>
                        <td>Argumentos posicionales y nominados</td>
                        <td>
                            <?php
                                    if($checked['Act8'] == "x"){
                                        echo "<center><input id='Act8' name='Act8' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act8'] == "o"){
                                        echo "<center><input id='Act8' name='Act8' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2.4</th>
                        <td>Argumentos defaults</td>
                        <td>
                            <?php
                                    if($checked['Act9'] == "x"){
                                        echo "<center><input id='Act9' name='Act9' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act9'] == "o"){
                                        echo "<center><input id='Act9' name='Act9' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2.5</th>
                        <td>Recursividad</td>
                        <td>
                            <?php
                                    if($checked['Act10'] == "x"){
                                        echo "<center><input id='Act10' name='Act10' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act10'] == "o"){
                                        echo "<center><input id='Act1' name='Act10' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    <tr>
                        <th scope="row">3</th>
                        <td>Programación Orientada a Objetos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3.1</th>
                        <td>Definición de una clase</td>
                        <td>
                            <?php
                                    if($checked['Act11'] == "x"){
                                        echo "<center><input id='Act11' name='Act11' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act11'] == "o"){
                                        echo "<center><input id='Act11' name='Act11' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.2</th>
                        <td>Métodos y atributos de instancias</td>
                        <td>
                            <?php
                                    if($checked['Act12'] == "x"){
                                        echo "<center><input id='Act12' name='Act12' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act12'] == "o"){
                                        echo "<center><input id='Act12' name='Act12' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.3</th>
                        <td>Métodos y atributos de clase</td>
                        <td>
                            <?php
                                    if($checked['Act13'] == "x"){
                                        echo "<center><input id='Act13' name='Act13' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act13'] == "o"){
                                        echo "<center><input id='Act13' name='Act13' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.4</th>
                        <td>Herencia</td>
                        <td>
                            <?php
                                    if($checked['Act14'] == "x"){
                                        echo "<center><input id='Act14' name='Act14' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act14'] == "o"){
                                        echo "<center><input id='Act14' name='Act14' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3.5</th>
                        <td>Módulos</td>
                        <td>
                            <?php
                                    if($checked['Act15'] == "x"){
                                        echo "<center><input id='Act15' name='Act15' class='form-check-input' type='checkbox' id='gridCheck'></center>";
                                    } else if($checked['Act15'] == "o"){
                                        echo "<center><input id='Act15' name='Act15' class='form-check-input' type='checkbox' id='gridCheck' checked></center>";
                                    }
                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <input hidden name="idCurso" id="idCurso" value="2">
            <center><button type="submit" class="btn btn-primary">Guardar Cambios</button></center>
        </form>
        <br>
        <br>
        <hr width="300px">
        <center><a href="download_file.php?id=python" class="btn btn-primary">Download PDF<i class="material-icons">save_alt</i></a></center>
    </div>
</body>
</html>