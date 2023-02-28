<?php

$nombre = $_POST["user_name"];
$email = $_POST["user_mail"];
$asunto = $_POST["user_asunto"];
$mensaje = $_POST["user_messege"];

$destinatario = "analiaquispe1089@gmail.com";;
$header = "Enviado desde la web CV de Analia Naomi";

$mensajeCompleto = $mensaje . "\nAtentemente: " . $nombre . "\n" . $email;
mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script>alert('Correo enviado correctamente')</script>";
echo "<script> setTimeout(\"location.href='../index.html'\", 100)</script>";

?>