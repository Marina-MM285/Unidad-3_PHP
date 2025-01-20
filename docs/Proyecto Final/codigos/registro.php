<html>
    <head>
    <link rel="stylesheet" href="estilos.css">
    </head>
<body>

<?php
// Creo una variable para la conexión con la base de datos
$conexion=mysqli_connect("localhost:52000","alumne","alumne","sistema_login") or
die("Problemas con la conexión");

// Creo variables con el usuario y la contraseña introducidos en el registro.html
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// una variable para la fecha actual
$date = date('d/m/y h:m:s');

// una variable para el hash de las contraseñas
$hash = password_hash($contrasena, PASSWORD_BCRYPT);

// Inserción de los datos introducidos en el formulario de registro.html
mysqli_query($conexion,"insert into usuarios(nombre_usuario,contrasena,fecha_registro) values('$usuario','$hash','$date')" ) or
die("Problemas en el select".mysqli_error($conexion));

// cerramos la conexión
mysqli_close($conexion);

// dasmos el mensaje como que el usuario ha sido registrado sin problemas
echo "El usuario ha sido registrado";

?>

<br>
<a href="login.html" id="volver">Ir al login</a>

</body>
</html>