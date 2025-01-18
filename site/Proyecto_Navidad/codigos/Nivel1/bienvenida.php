<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>

<style>

    #logout {
        display: inline-block;
        padding: 5px 10px;
        background-color: #3d98ff;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 6px;
    }

</style>

<body>
    

<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit;
}

echo "<h1 id=welcome>¡Bienvenid@!</h1>";
echo "<b>Usuario:</b> " . $_SESSION['usuario_id'];

?>

<br>
<br>

<a href="cerrar_sesion/logout.php" id="logout">Cerrar sesión</a>

</body>
</html>