<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>

<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #cadaf6;
    margin: 0;
    padding: 0;
    height: 100vh;
  }

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
</head>
<body>

<!-- Empiezar sesión con mensaje de bienvenida -->
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

echo "<h1>¡Bienvenid@!</h1>";
echo "<b>Usuario:</b> " . $_SESSION['usuario'];

?>

<br>
<br>

<a href="logout.php" id="logout">Cerrar sesión</a>

</body>
</html>