<?php
// Creo una variable para la conexión con la base de datos
session_start();
$conexion=mysqli_connect("localhost:52000","alumne","alumne","sistema_login") or
die("Problemas con la conexión");

// Creo variables con el usuario, la contraseña y el captcha introducidos en el login.html 
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$captcha=$_POST['captcha'];

// y una variable con la consulta del nombre de usuario para comprovar que existe
$consulta= "select * from usuarios where nombre_usuario='$usuario'";

// Con estas variables comprobaremos si el nombre de usuario existe
$sql=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
$user=$row["nombre_usuario"];
$pass=$row["contrasena"];

// Comprobaciones de que el usuario exista y la contraseña y el captcha estén correctos
if (is_null($user)){
    echo "El usuario no existe" . '<br>';
}   if(password_verify($contrasena, $pass)){
        echo "La contraseña es incorrecta" . '<br>';
}       if($_SESSION['valoraleatorio'] != $captcha){
            echo "El CAPTCHA introducido es incorrecto";
}else{
    // cuando todo esta bien creamos la variable de seseión y redirigimos a la pagina de bienvenida
    $_SESSION['usuario']=$user;
    header("Location: bienvenida.php");
}



?>