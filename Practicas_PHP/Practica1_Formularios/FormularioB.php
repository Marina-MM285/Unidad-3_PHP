<!DOCTYPE html>

<html lang="en">
  <head> 
    <title>Captura de datos del form</title> 
  </head> 
  <body>
      <form method="post" action="datos.php">
        usuario
        <input type="text" name="usuario">
        <br>
        Contraseña
        <input type="password" name="password">
        <br>
        <input type="submit" value="login">
      </form>


  <?php 
  echo $_REQUEST['usuario'];
  echo $_REQUEST['password']; 
  ?>
</body> 
</html>
