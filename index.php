<?php    
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $mensaje = $_POST['mensaje'];

            $asunto = 'CONTACTO TECNICARGO';
            $destinatario = 'informacion@tutecnicargo.com';

            $elcorreo = 'Este mensaje fue enviado desde el Sitio Web de Tecnicargo';
            $elcorreo .= 'DE: $nombre \n';
            $elcorreo .= 'CORREO ELECTRÓNICO: $correo \n';
            $elcorreo .= 'NUMERO DE CONTACTO: $telefono \n';
            $elcorreo .= 'DIRECCIÓN: $direccion \n';
            $elcorreo .= 'MENSAJE: $mensaje \n';

            mail($destinatario, $asunto, $elcorreo);

            if($mail){                 
                echo "<script> alert('Correo electrónico ENVIADO satisfactoriamente'); </script>"; 
            }            
        }
    }
?>