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
        <li>Categorías</li>
        <li>Autores</li>
        <li><img src="./assets/home.png" alt="home" class="home_icon"></li>
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
        <p class="frase_text">Frase</p>
        <p class="author_name">- Autor (AAAA)</p>
    </div>

    <footer>
        <p>2023 NatLM</p>
        <a href="./vistas/suscripcion.php" class="btn_primay">Suscribirse </a>
    </footer>
</body>
</html>