<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo electrónico del formulario
    $correoElectronico = $_POST["correoElectronico"];

    // Valida y sanitiza los datos si es necesario

    $servername = "localhost:3306";
    $username = "root";
    $password = "laptophp";
    $dbname = "narradora";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para insertar el correo electrónico
    $sql = "INSERT INTO suscriptores (correoElectronico) VALUES ('$correoElectronico')";

    // Ejecuta la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Suscripción exitosa. ¡Gracias!";
    } else {
        echo "Error al suscribirse: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>
