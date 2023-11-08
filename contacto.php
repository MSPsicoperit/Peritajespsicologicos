<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    // Configura el destinatario del correo electrónico
    $destinatario = "psicoperit@gmail.com"; // Reemplaza con la dirección de correo del destinatario

    // Asunto y contenido del correo electrónico
    $asunto = "Mensaje de contacto desde tu sitio web";
    $contenido = "Nombre: $nombre\nCorreo electrónico: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";

    // Encabezados para el correo electrónico
    $headers = "From: $email";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        // Éxito: el correo electrónico se ha enviado correctamente
        header("Location: gracias.html"); // Redirige a una página de agradecimiento
    } else {
        // Error: no se pudo enviar el correo electrónico
        echo "Hubo un problema al enviar el correo electrónico. Por favor, inténtalo de nuevo.";
    }
}
?>
