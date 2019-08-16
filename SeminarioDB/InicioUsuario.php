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
<script>

$(document).ready(function(){ 
    $('#LCurso-de-Java').on('click',function(){
        $('#Curso-de-Java').toggle();
    });

    $('#LCurso-de-Python').on('click',function(){
        $('#Curso-de-Python').toggle();
    });
});

</script>
<?php
include('Conexion.php');

$query = mysqli_query($conexion, "SELECT * FROM Cursos");
$accesoCursoJ = mysqli_query($conexion, "SELECT * FROM RegistroUsuCurso WHERE Username='".$_SESSION['usuario']."' AND idCurso=1");
$accesoCursoP = mysqli_query($conexion, "SELECT * FROM RegistroUsuCurso WHERE Username='".$_SESSION['usuario']."' AND idCurso=2");

$accesoCurso2 = mysqli_query($conexion, "SELECT * FROM RegistroUsuCurso WHERE Username='".$_SESSION['usuario']."'");

$certificadoJ = mysqli_query($conexion, "SELECT * FROM Examenes WHERE Username='".$_SESSION['usuario']."' AND idCurso=1 AND CaliUnidadUno >= 8 AND CaliUnidadDos >= 8 AND CaliUnidadTres >= 8");
$certificadoP = mysqli_query($conexion, "SELECT * FROM Examenes WHERE Username='".$_SESSION['usuario']."' AND idCurso=2 AND CaliUnidadUno >= 8 AND CaliUnidadDos >= 8 AND CaliUnidadTres >= 8");

$idcurso = mysqli_query($conexion, "SELECT * FROM Cursos");
while($curso = mysqli_fetch_assoc($idcurso)){
    if($curso['idCurso'] == 1) {
        $java = $curso['idCurso'];
    } else {
        $pytho = $curso['idCurso'];
    }
}
?>
<body>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cursos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" id="LCurso-de-Python">Curso de Python</a>
                    <a class="dropdown-item" href="#" id="LCurso-de-Java">Curso de Java</a>
                </div>
            </li>
            <?php
                if(mysqli_num_rows($accesoCurso2) > 0) {
                    while($rowCnav = mysqli_fetch_assoc($accesoCurso2)) {
                        if($rowCnav['idCurso'] == 1) {
                            echo "
                            <li class='nav-item'>
                                <a class='nav-link' href='CursoJava.php'>Curso de Java</a>
                            </li>
                            ";
                        } else if($rowCnav['idCurso'] == 2) {
                            echo "
                            <li class='nav-item'>
                                <a class='nav-link' href='CursoPython.php'>Curso de Python</a>
                            </li>
                            ";
                        }
                    }
                }
            ?>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="Curso-de-Java" style="display: none">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso de Java</h5>
                    <p class="card-text">
                        <dl>
                            <h6><dt>1. La tecnología Java</dt></h6>
                            <dd>&nbsp;&nbsp;1.1 El lenguaje de programación Java</dd>
                            <dd>&nbsp;&nbsp;1.2 La plataforma Java</dd>
                            <dd>&nbsp;&nbsp;1.3 Tipos de programas en Java</dd>
                            <dd>&nbsp;&nbsp;1.4 Compilación y ejecución de programas</dd>
                            <dd>&nbsp;&nbsp;1.5 Creación de aplicaciones con el JDK</dd>
                        </dl>
                        <dl>
                            <h6><dt>2. Estructura del lenguaje</dt></h6>
                            <dd>&nbsp;&nbsp;2.1 Comentarios</dd>
                            <dd>&nbsp;&nbsp;2.2 Identificadores</dd>
                            <dd>&nbsp;&nbsp;2.3 Palabras Clave</dd>
                            <dd>&nbsp;&nbsp;2.4 Literales</dd>
                            <dd>&nbsp;&nbsp;2.5 Expresiones y Operadores</dd>
                        </dl>
                        <dl>
                            <h6><dt>3. Conceptos de la Programación Orientada a Objetos</dt></h6>
                            <dd>&nbsp;&nbsp;3.1 Clases y Objetos</dd>
                            <dd>&nbsp;&nbsp;3.2 Mensajes y métodos</dd>
                            <dd>&nbsp;&nbsp;3.3 Encapsulamiento</dd>
                            <dd>&nbsp;&nbsp;3.4 Herencia, Superclases y Subclases</dd>
                            <dd>&nbsp;&nbsp;3.5 Polimorfismo</dd>
                        </dl>
                    </p>
                    <?php  
                        if(mysqli_num_rows($accesoCursoJ) > 0) {
                            echo "<a class='btn btn-secondary'>Inscrito</a>";
                            if(mysqli_num_rows($certificadoJ) > 0){
                                echo "<br><br><a href='Certificados.php?id=java' class='btn btn-success'>Certificado<i class='material-icons'>save_alt</i></a>";
                            } else if(mysqli_num_rows($certificadoJ) == 0){
                                echo "";
                            }
                        } else if(mysqli_num_rows($accesoCursoJ) == 0){
                            echo "<a href='AltaCurso.php?usua=".$_SESSION['usuario']."&curso=".$java."' class='btn btn-primary'>Inscribisrse</a>";
                        }     
                    ?>
                </div>
                </div>
            </div>
            <div class="col-sm-6" id="Curso-de-Python" style="display: none">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Curso de Python</h5>
                    <p class="card-text">
                        <dl>
                            <h6><dt>1. Tipos de Datos</dt></h6>
                            <dd>&nbsp;&nbsp;1.1 Tuplas, Listas y Diccionarios</dd>
                            <dd>&nbsp;&nbsp;1.2 Estructura de control de flujo, Bucles</dd>
                            <dd>&nbsp;&nbsp;1.3 Comprensiones de listas</dd>
                            <dd>&nbsp;&nbsp;1.4 Archivos</dd>
                            <dd>&nbsp;&nbsp;1.5 Expresiones regulares</dd>
                        </dl>
                        <dl>
                            <h6><dt>2. Programación Funcional</dt></h6>
                            <dd>&nbsp;&nbsp;2.1 Definición de una función</dd>
                            <dd>&nbsp;&nbsp;2.2 Llamada de la función</dd>
                            <dd>&nbsp;&nbsp;2.3 Argumentos posicionales y nominados</dd>
                            <dd>&nbsp;&nbsp;2.4 Argumentos defaults</dd>
                            <dd>&nbsp;&nbsp;2.5 Recursividad </dd>
                        </dl>
                        <dl>
                            <h6><dt>3. Programación Orientada a Objetos</dt></h6>
                            <dd>&nbsp;&nbsp;3.1 Definición de una clase</dd>
                            <dd>&nbsp;&nbsp;3.2 Métodos y atributos de instancias</dd>
                            <dd>&nbsp;&nbsp;3.3 Métodos y atributos de clase</dd>
                            <dd>&nbsp;&nbsp;3.4 Herencia</dd>
                            <dd>&nbsp;&nbsp;3.5 Módulos</dd>
                        </dl>
                    </p>
                    <?php  
                        if(mysqli_num_rows($accesoCursoP) > 0) {
                            echo "<a class='btn btn-secondary'>Inscrito</a>";
                            if(mysqli_num_rows($certificadoP) > 0){
                                echo "<br><br><a href='Certificados.php?id=python' class='btn btn-success'>Certificado<i class='material-icons'>save_alt</i></a>";
                            } else if(mysqli_num_rows($certificadoP) == 0){
                                echo "";
                            }
                        } else if(mysqli_num_rows($accesoCursoP) == 0){
                            echo "<a href='AltaCurso.php?usua=".$_SESSION['usuario']."&curso=".$pytho."' class='btn btn-primary'>Inscribisrse</a>";
                        }     
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr width="500px">
    <blockquote class="blockquote text-center">
        <p class="mb-0">La educación es lo que permanece después de que uno ha olvidado lo que aprendió en el colegio.</p>
        <footer class="blockquote-footer">Albert Einstein en la <cite title="Source Title">Educación</cite></footer>
    </blockquote>
</body>
</html>