<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>modificar email</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body class="container">
        <div class="jumbotron text-center">
            <h1>Sistema bancario</h1>
        </div>    
        <div class="text-center">
            <form action="modificar_email.php" method="get">
            <input name="email" class="form-control form-control-lg" placeholder="Ingrese el nuevo email"><br>
            <input type="submit" value="Modificar" class="btn btn-primary">
            </form>
      </div> 
    </body>
</html>

<?php 
require_once 'clases/Usuario.php';

session_start();
$usuario = unserialize($_SESSION['usuario']);

if (isset($_GET['email'])){
    return $usuario->setEmail($_GET['email'],($usuario->getId()));
}else {
    return "no se escribio nada";
}
?>
