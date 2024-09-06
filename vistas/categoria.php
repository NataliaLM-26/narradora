<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/categoria.css">
    <title>Categoría: Amor</title>
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

    <header>
        <h1>Amor</h1>
    </header>

    <div class="item_phrase">
    <?php
        $servername = "localhost:3306";
        $username = "root";
        $password = "laptophp";
        $dbname = "narradora";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql="SELECT * FROM frase where categoria like 'Amor'";
        $result=$conn->query($sql);

        // si hay resultados itera sobre ellos
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p class='frase_text'>". $row["oracion"] ."</p>";
                echo "<p class='author_name'>". $row["autornombre"] ."</p>";
                echo "<p class='author_name'>". $row["autorfecha"] ."</p>";
            }
        } else {
            echo "No se encontraron frases de amor.";
        }
    
        ?>
        <p class="text_phrase">Uno está enamorado cuando se da cuenta de que otra persona es única.</p>
        <p class="text_nameAuthor">- Jorge Luis Borges (1899-1986) Escritor argentino.</p>
    </div>

    <footer>
        <p>2023 NatLM</p>
        <a href="./vistas/suscripcion.php" class="btn_primay">Suscribirse </a>
    </footer>
</body>
</html>