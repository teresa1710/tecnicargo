<?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];


    $destinatario = "teresa.tavernelli@gmail.com";
    $asunto = "Contacto TECNICARGO";

    $elcorreo = "De: $nombre \n";
    $elcorreo .= "Correo Electrónico: $correo \n";
    $elcorreo .= "$mensaje \n";

    mail($destinatario, $asunto, $elcorreo);

    if (@mail($destinatario, $asunto ,$elcorreo )) {
            //Si el mensaje se envía muestra una confirmación
            die("Gracias, su mensaje se envio correctamente.");
            header("Location: http://www.tutecnicargo.com");
        }else{
            //Si el mensaje no se envía muestra el mensaje de error
            die("Error: Su información no pudo ser enviada, intente más tarde");
        }
        
        exit();
    

?>