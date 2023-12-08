<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/autores.css">
    <title>Autores</title>
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

    <header class="titulo">
        <h2>Autores</h2>
    </header>

    <section class = "autores">
        <div class = "author_name">
        <?php
        $servername = "localhost:3306";
        $username = "root";
        $password = "laptophp";
        $dbname = "narradora";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql="SELECT autornombre FROM frase";
        $result=$conn->query($sql);

        // Verifica si hay resultados y luego itera sobre ellos
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p class='author_name'>" . $row["autornombre"] . "</p>";
            }
        } else {
            echo "No se encontraron autores.";
        }
    
        ?>
        </div>
    </section>

    <footer>
        <p>2023 NatLM</p>
        <button class="btn_primay">Suscribirse</button>
    </footer>
</body>
</html>