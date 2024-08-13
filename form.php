<?php
// procesar_formulario.php
$servidor = "localhost";
$usuario = "root";
$bd= "formulario";
$conecta = mysqli_connect($servidor, $usuario, $bd):
if($conecta->connect_error){
    die("Error al conectar la base de datos de la página");
}

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge y valida los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['comments']);

    // Aquí puedes hacer lo que necesites con los datos, por ejemplo:
    // - Guardarlos en una base de datos
    // - Enviar un correo electrónico
    // - Mostrar un mensaje de confirmación, etc.

    // Ejemplo de mensaje de confirmación
    echo "Gracias, $nombre. Hemos recibido tu mensaje: \"$comments\" y te contactaremos pronto en $email.";
}
?>