<?php
// Destruimos la variable sesion y redirijimos a la pagina de login.html
session_start();
session_destroy();
header("Location: login.html");
exit;
?>
