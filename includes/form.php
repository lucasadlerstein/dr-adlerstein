<?php 
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
        
    $address = "dr@adlerstein.com.ar";
    $e_subject = $nombre . ' Contacto - Dr. Fabio Adlerstein';
        
    $e_body = "Nuevo contacto a través del sitio web:" . PHP_EOL . PHP_EOL;
    $e_content = "Nombre y apellido: $nombre $apellido" . PHP_EOL;
    $e_content .= "Mensaje: $mensaje" . PHP_EOL;
    $e_reply = "Contacto: $email - $telefono";

    $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
    
    $headers = "From: $address" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

    mail($address, $e_subject, $msg, $headers);

    if(mail($address, $e_subject, $msg, $headers)) {
        $respuesta = array(
            'respuesta' => 'enviado',
            'tipo' => 'formulario'
        );
    } else {
        $respuesta = array(
            'respuesta' => 'error',
            'tipo' => 'formulario'
        );
    }

    echo json_encode($respuesta);
}
?>