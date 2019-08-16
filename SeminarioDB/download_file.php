<?php

if(!(empty($_GET['id']))){
    if($_GET['id'] == "java"){
        header("Content-disposition: attachment; filename=Curso-Java.pdf");
        header("Content-type: application/octet-stream");
        header ("Content-Length: ".filesize('Curso-Java.pdf'));
        readfile("Curso-Java.pdf");

    } else if($_GET['id'] == "python"){
        header("Content-disposition: attachment; filename=Curso-Python.pdf");
        header("Content-type: application/octet-stream");
        header ("Content-Length: ".filesize('Curso-Python.pdf'));
        readfile("Curso-Python.pdf");
    }
}

?>