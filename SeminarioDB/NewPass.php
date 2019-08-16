<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include('Conexion.php');
    include "PHPMailer-master/src/PHPMailer.php";
    include "PHPMailer-master/src/SMTP.php";
    require "PHPMailer-master/src/Exception.php";

    if(!empty($_POST['usernameP'])) {
        $query4 = "SELECT * FROM LoginUsuarios WHERE Username='".$_POST['usernameP']."'";
        $ejecut2 = mysqli_query($conexion, $query4);
        $user_count2 = mysqli_num_rows($ejecut2);
        if($user_count2 > 0) {
            echo "<span class='text-success font-weight-bold'> Usuario Existente.</span>";
            // -------------------------Email------------------------------------------
            $correoP = mysqli_query($conexion, "SELECT * FROM RegistroUsu WHERE Username='".$_POST['usernameP']."'");
            while($row = mysqli_fetch_assoc($correoP)){
                //-------------------------------------------Nueva Clave----------------------

                $logitud = 8;
                $psswd = substr( md5(microtime()), 1, $logitud);
                // echo $psswd;

                //-----------------------------------------------------EMAIL------------------ naruto21lol --- jorge21.gnz
                $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
                $phpmailer->IsSMTP();
                //Crear una instancia de PHPMailer
                $email_user = "jorge21.gnz@gmail.com";
                $email_password = "naruto21lol";
                $the_subject = "Modificacion de Password";
                $address_to = $row['Correo'];
                $from_name = "Francisco Javier Perez";
                // ---------- datos de la cuenta de Gmail -------------------------------
                $phpmailer->Username = $email_user;
                $phpmailer->Password = $email_password; 
                //-----------------------------------------------------------------------
                // $phpmailer->SMTPDebug = 1;
                $phpmailer->SMTPSecure = 'ssl';
                $phpmailer->Host = "smtp.gmail.com"; // GMail
                $phpmailer->Port = 465;
                $phpmailer->IsSMTP(); // use SMTP
                $phpmailer->SMTPAuth = true;
                $phpmailer->setFrom($phpmailer->Username,$from_name);
                $phpmailer->AddAddress($address_to); // recipients email
                $phpmailer->Subject = $the_subject;	
                $phpmailer->Body .="<h1 style='color:#3498db;'>Password Actualizado!</h1>";
                $phpmailer->Body .= "<p>Su password ha sido modificado</p><br><p>Su nuevo password es: <code>$psswd</code></p>";
                $phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
                $phpmailer->IsHTML(true);

                if($phpmailer->Send()){
                    $updatePR = mysqli_query($conexion, "UPDATE RegistroUsu SET Pass='".$psswd."' WHERE Username='".$_POST['usernameP']."'");
                    $updatePL = mysqli_query($conexion, "UPDATE LoginUsuarios SET Password='".$psswd."' WHERE Username='".$_POST['usernameP']."'");
                    echo "<script>
                        swal({
                            title: 'Correo Enviado!',
                            text: 'Nueva contraseña enviada',
                            icon: 'success',
                            button: 'OK',
                        }).then((value) => {
                            if(value){
                                setTimeout(function(){
                                window.location = '/SeminarioDB/index.html';
                                }, 500);
                            } else {
                                setTimeout(function(){
                                window.location = '/SeminarioDB/index.html';
                                }, 500);
                            }
                        });
                    </script>";
                } else {
                    echo "<script>
                        swal({
                            title: 'Correo No Enviado!',
                            text: 'Ocurrio un error',
                            icon: 'error',
                            button: 'OK',
                        }).then((value) => {
                            if(value){
                                setTimeout(function(){
                                window.location = '/SeminarioDB/ForgotPass.html';
                                }, 500);
                            } else {
                                setTimeout(function(){
                                window.location = '/SeminarioDB/ForgotPass.html';
                                }, 500);
                            }
                        });
                    </script>";
                }
            }
            // -------------------------------------------------------------------
            
            // echo "<script> 
            // setTimeout(function(){
            //     window.location = '/SeminarioDB/index.html';
            //   }, 1000);
            
            // </script>";
        }else{
            echo "<span class='text-danger font-italic'> Usuario no Existe.</span>";
            echo "<script> 
            setTimeout(function(){
                window.location = '/SeminarioDB/ForgotPass.html';
            }, 1000);
            
            </script>";
        }
    } else {
        echo "<span class='text-danger font-italic'> Usuario no Existe.</span>";
            echo "<script> 
            setTimeout(function(){
                window.location = '/SeminarioDB/ForgotPass.html';
            }, 1000);
            
            </script>";
    }
    ?>
</body>
</html>