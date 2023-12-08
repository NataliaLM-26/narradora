<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/index.css">
    <title>Narradora</title>
</head>
<body>
    <nav class="navbar">
    <img src="./assets/logo.png" alt="narradora" class="logo_icon" >
    <ul>
        <li>
            <a href="./vistas/categorias.php">
            Categorías
            </a>
        </li>
        <li>
            <a href="./vistas/autores.php">
            Autores
            </a>
        </li>
        <li>
            <a href="./index.php">
                <img src="./assets/home.png" alt="home" class="home_icon">
            </a>
        </li>
    </ul>
    </nav>
    
    <header>
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

        $sql="SELECT * FROM frase WHERE id LIKE '12'";
        $result=$conn->query($sql);

        $row = $result->fetch_assoc();

        echo "<p class='phraseTitle'>Frase del Día</p>";
        echo "<h3 class='name_phraseDay'>" . $row["oracion"] . "</h3>";
        echo "<p class='name_authorPhraseDay'>- " . $row["autornombre"] . "</p>";
        ?>    
    </header>

    <div class="frase">
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

            $sql="SELECT * FROM frase";
            $result=$conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p class='frase_text'>". $row["oracion"] ."</p>";
                    echo "<p class='author_name'>- " . $row["autornombre"] .  "</p>"; 
                    echo "<p class='author_name'>". $row["autorfecha"] ."</p>";
                }
            } else {
                echo "No se encontraron autores.";
            }

            
        ?>
    </div>

    <footer>
        <p>2023 NatLM</p>
        <a href="./vistas/suscripcion.php" class="btn_primay">Suscribirse </a>
    </footer>
</body>
</html>