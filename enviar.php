<?php
if(isset($_POST['submit'])) {
    $to = "info@mediazeta.com"; // Cambiar por la dirección de correo electrónico a la que deseas enviar el mensaje
    $subject = "Mensaje enviado desde el formulario de contacto";
    $name = $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $email";

    mail($to, $subject, "Nombre: ".$name."\nApellidos: ".$apellidos."\nEmail: ".$email."\n\n".$message, $headers);
}
?>


