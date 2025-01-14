<?php
session_start();
session_destroy();
header("Location: ../iniciar_sesion/login.html");
exit;
?>
