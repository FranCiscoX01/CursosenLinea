<?php

if(!(empty($_GET['id']))){
    if($_GET['id'] == "java"){
        header("Content-disposition: attachment; filename=CertificadoJava.pdf");
        header("Content-type: application/octet-stream");
        header ("Content-Length: ".filesize('CertificadoJava.pdf'));
        readfile("CertificadoJava.pdf");

    } else if($_GET['id'] == "python"){
        header("Content-disposition: attachment; filename=CertificadoPython.pdf");
        header("Content-type: application/octet-stream");
        header ("Content-Length: ".filesize('CertificadoPython.pdf'));
        readfile("CertificadoPython.pdf");
    }
}

?>