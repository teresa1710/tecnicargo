<?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];


    $destinatario = "informacion@tutecnicargo.com";
    $asunto = "CONTACTO INFORMACION TECNICARGO";

    $elencabezado = "Enviado desde la pagina web: www.tutecnicargo.com";

    $elcorreo = "$elencabezado \n";
    $elcorreo .= "De: $nombre \n";
    $elcorreo .= "Correo Electrónico: $correo \n";
    $elcorreo .= "$mensaje \n";

    mail($destinatario, $asunto, $elcorreo);

    if (@mail($destinatario, $asunto ,$elcorreo )) {
        echo "<script> alert ('Correo enviado EXITOSAMENTE') </script>";
        echo "<script> setTimeout(\"location.href='index.html'\",2000)</script>";
    
    }else{
        echo "<script> alert ('El Correo NO pudo ser enviado, intentelo mas tarde') </script>";
    }
        
    exit();
    

?>