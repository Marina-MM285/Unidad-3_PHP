<?php
session_start();
$conexion=mysqli_connect("localhost:52000","alumne","alumne","examen_php") or
die("Problemas con la conexión");

$usuario=$_POST['user'];
$contrasena=$_POST['password'];
$captcha=$_POST['captcha'];

$consulta= "select * from users where user='$usuario'";

$sql=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
$user=$row["user"];
$pass=$row["password"];

if (is_null($user)){
    echo "El usuario no existe" . '<br>';
}   if($contrasena != password_verify($contrasena, $pass)){
        echo "La contraseña es incorrecta" . '<br>';
}       if($_SESSION['valoraleatorio'] != $captcha){
            echo "El CAPTCHA introducido es incorrecto";
}else{
    $_SESSION['id']=$user;
    header("Location: url.html");
}


?>