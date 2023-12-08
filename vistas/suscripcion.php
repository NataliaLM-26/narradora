<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/suscripcion.css">
    <title>Suscripción</title>
</head>
<body>
    <nav class="navbar">
        <img src="../assets/logo.png" alt="narradora" class="logo_icon" >
        <ul>
            <li>
                <a href="../vistas/categorias.php">
                Categorías
                </a>
            </li>
            <li>
                <a href="../vistas/autores.php">
                Autores
                </a>
            </li>
            <li>
                <a href="../index.php">
                    <img src="../assets/home.png" alt="home" class="home_icon">
                </a>
            </li>
        </ul>
    </nav>

    <section class="message_suscription">
        <div class="box_email">
            <h3>Suscripción</h3>
            <p class="texto">Al realizar tu suscripción aceptas que haremos llegar un correo diario con una frase para tu día a día.</p>
            <form action="../vistas/suscripcion.php" method="post">
                <label for="email">Correo Electrónico</label><br>
                <input type="email" name="email" placeholder="user@example.com"><br>
                <button class="btn_primary">Aceptar</button>
            </form>
            
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST["email"];

                    $servername = "localhost:3306";
                    $username = "root";
                    $password = "laptophp";
                    $dbname = "narradora";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

                    $sql = "INSERT INTO users (email) VALUES ('$email')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p>Suscripción exitosa. ¡Gracias!</p>";
                    } else {
                        echo "Error al suscribirse: " . $conn->error;
                    }

                    $conn->close();
                }
            ?>
        </div>
    </section>

    <footer>
        <p>2023 NatLM</p>
        <a href="../vistas/suscripcion.php" class="btn_primay">Suscribirse </a>
    </footer>
</body>
</html>