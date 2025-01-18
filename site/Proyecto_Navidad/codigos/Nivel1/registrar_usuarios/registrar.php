<html>
<head>
    <title>Insertar</title>
    <meta charset="UTF-8">

</head>
<style>

    #volver{
      display: inline-block;
              padding: 2px 4px;
              background-color: #404040;
              color: white;
              text-align: center;
              text-decoration: none;
              border-radius: 6px;
              font-size: small;
    }
  
</style>
<body>
<?php
$conexion=mysqli_connect("localhost:52000","alumne","alumne","escuela") or
        die("Problemas con la conexión");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


mysqli_query($conexion,"insert into usuarios(nombre,email,password) values('$nombre','$email','$password')") or
     die("Problemas en el select".mysqli_error($conexion));


mysqli_close($conexion); 

echo "El usuario ha sido registrado.";
?>

<br>

<a href="../../principal.html" id="volver">Volver al menú principal</a>

</body>
</html>