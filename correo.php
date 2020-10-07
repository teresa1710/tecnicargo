<?php    
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $mensaje = $_POST['mensaje'];

            $asunto = "CONTACTO TECNICARGO";
            $destinatario = "informacion@tutecnicargo.com";

            $elcorreo = "Este mensaje fue enviado desde el Sitio Web de Tecnicargo. \n";
            $elcorreo .= "DE: $nombre .\n";
            $elcorreo .= "CORREO ELECTRONICO: $correo .\n";
            $elcorreo .= "NUMERO DE CONTACTO: $telefono .\n";
            $elcorreo .= "DIRECCION: $direccion .\n";
            $elcorreo .= "MENSAJE: $mensaje .\n";

            $mail = mail($destinatario, $asunto, $elcorreo);   
            
            if($mail){
                echo "<script> alert('Correo electrónico ENVIADO satisfactoriamente'); </script>"; 
            }else{
                echo "<script> alert('Tu correo no pudo ser enviado'); </script>";
            }
        }
    }
?>