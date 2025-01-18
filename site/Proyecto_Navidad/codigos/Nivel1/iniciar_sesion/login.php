<?php
$conexion=mysqli_connect("localhost:52000","alumne","alumne","escuela") or
die("Problemas con la conexión");

$email=$_POST['email'];

$consulta= "select * from usuarios where email='$email'";

$sql=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
$user=$row["nombre"];

echo $user;

if (is_null($user)){
    echo "El usuario no existe";
}else{
      session_start();
    $_SESSION['usuario_id']=$user;
}

header("Location: ../bienvenida.php");


?>