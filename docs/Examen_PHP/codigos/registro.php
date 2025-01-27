<html>
    <head>
    <link rel="stylesheet" href="estilos.css">
    </head>
<body>

<?php
$conexion=mysqli_connect("localhost:52000","alumne","alumne","examen_php") or
die("Problemas con la conexión");

$usuario = $_POST['user'];
$contrasena = $_POST['password'];
$hash = password_hash($contrasena, PASSWORD_BCRYPT);

mysqli_query($conexion,"insert into users(user,password) values('$usuario','$hash')" ) or
die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El usuario ha sido registrado";

?>

<br>
<a href="url.html" id="volver">Acortar URL</a>

</body>
</html>