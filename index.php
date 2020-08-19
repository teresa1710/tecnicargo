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
    

?>