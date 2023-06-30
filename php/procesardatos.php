<?php
// Obtener los valores enviados por el formulario
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$infoType = $_GET['info-type'];
$gender = $_GET['gender'];
$comments = $_GET['comments'];
$saveData = isset($_GET['save-data']) ? "Sí" : "No";

// Validar y sanitizar los datos recibidos si es necesario
// ...

// Generar la nueva página con los datos recibidos
$php = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Información del Usuario</title>
    <link rel='stylesheet' href='../estilos/home.css'>
</head>
<body>
    <h1>Información del Usuario</h1>
    <p><strong>Nombre:</strong> $name</p>
    <p><strong>E-mail:</strong> $email</p>
    <p><strong>Teléfono:</strong> $phone</p>
    <p><strong>Dirección:</strong> $address</p>
    <p><strong>Tipo de información:</strong> $infoType</p>
    <p><strong>Género:</strong> $gender</p>
    <p><strong>Comentarios:</strong> $comments</p>
    <p><strong>¿Guardar datos?:</strong> $saveData</p>
</body>
</html>
";

// Guardar el contenido HTML en un nuevo archivo
$filename = "informacion_usuario.php";
file_put_contents($filename, $php);

// Redirigir al usuario a la nueva página generada
header("Location: $filename");
exit();
?>

