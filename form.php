<?php

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

$para = 'mauriciocisneros1997@gmail.com';
$asunto = 'Este email fue enviado desde la Web';

mail($para, $asunto, utf8_decode($mensaje));

header('Location:exito.html');

?>