<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "juliangithubearl@gmail.com"; // Reemplaza con la dirección de correo a la que quieres enviar el mensaje
    $asunto = "Nuevo mensaje de contacto desde tu sitio web";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

    mail($destinatario, $asunto, $contenido, $headers);

    // Redirecciona a una página de confirmación o gracias
    header("Location: gracias.html"); // Crea un archivo "gracias.html" para mostrar un mensaje de confirmación

} else {
    // Si alguien trata de acceder a este archivo directamente, redirige a una página de error
    header("Location: error.html"); // Crea un archivo "error.html" para mostrar un mensaje de error
}
?>
