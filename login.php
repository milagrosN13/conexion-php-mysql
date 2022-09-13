<?php
require_once 'clases/ControladorSesion.php';

if (empty($_POST['usuario']) || empty($_POST['clave'])) {
    $redirigir = 'index.php?mensaje=Error: Falta un campo obligatorio';
} else {
    $cs = new ControladorSesion();
    $login = $cs->login($_POST['usuario'], $_POST['clave']);
    if ($login[0] === true) {
        $redirigir = 'home.php';
    } else {
        $redirigir = 'index.php?mensaje=' . $login[1];
    }
}
header('Location: '.$redirigir);
