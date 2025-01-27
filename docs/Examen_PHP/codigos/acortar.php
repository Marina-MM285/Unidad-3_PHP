<?php
session_start();
$conexion=mysqli_connect("localhost:52000","alumne","alumne","examen_php") or
die("Problemas con la conexión");


if (!isset($_SESSION['id'])) {
    echo "Debes iniciar sesión para acortar URLs.";
    exit;
}

$url=$_POST['url'];

echo $url;

// Función para generar la URL corta
function generar_url_corta($url) {
    $hash = md5($url);
    return substr($hash, 0, 8);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url_original = $_POST['url'];
    $id = $_SESSION['id'];
    $url_corta = generar_url_corta($url_original);
    $date = date('d/m/y h:m:s');
    

    $sql = "INSERT INTO urls (url_original, url_corta, usuario_id, fecha_creacion) VALUES ('$url_original', '$url_corta', '$usuario_id', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo "Tu URL corta es: http://tudominio.com/redirect.php?u=$url_corta";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



if (isset($_POST['url'])) {
    $url_original = $_POST['url'];
    $url_corta = generar_url_corta($url_original);

    // Insertar en la base de datos
    $sql = "INSERT INTO url (url_original, url_corta, usuario_id, fecha_creacion) VALUES ('$url_original', '$url_corta', '$id', '$date')";
    mysqli_query($conexion,$sql) or die("Problemas en el select".mysqli_error($conexion));

        echo "Tu URL corta es: http://tudominio.com/" . $url_corta;
}




?>