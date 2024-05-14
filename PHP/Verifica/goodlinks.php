<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <?php

    require 'connect.php';

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['email']) && isset($_SESSION['idUtente'])) {
        $email = $_SESSION['email'];
        $idUtente = $_SESSION['idUtente'];

        if (
            $_SERVER["REQUEST_METHOD"] == "POST"
            && isset($_POST['url']) && !empty($_POST['url'])
            && isset($_POST['title']) && !empty($_POST['title'])
            && isset($_POST['category']) && !empty($_POST['category'])
        ) {
            $url = $_POST['url'];
            $title = $_POST['title'];
            $category = $_POST['category'];

            $query = "INSERT INTO links (title, url, idCategory, idUtente) VALUES (?,?,?,?)";
            $stmtPrenotazione = $conn->prepare($query);
            $stmtPrenotazione->bind_param("ssii", $title, $url, $category, $idUtente);
            $resPrenotazione = $stmtPrenotazione->execute();

            $stmtPrenotazione->close();
        }

        if (isset($_GET['logout']) && $_GET['logout'] == 1) {
            session_destroy();
            header("Location: Login.html");
            exit;
        }
    } else {
        echo '<script>alert("Errore: Utente non definito nella sessione.");</script>';
    }
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MyLinks</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="mylinks.php">MyLinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="goodlinks.php"><img src="ico/home.png" alt="Icona" width="30" height="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="goodlinks.php?logout=1"><img src="ico/logout.png" alt="Icona" width="30" height="30"></a>
                </li>
            </ul>
        </div>
    </nav>

    <form method="post" action="goodlinks.php">
        <label for="url">URL:</label>
        <input type="text" name="url" required>

        <label for="title">Titolo:</label>
        <input type="text" name="title" required>

        <label for="category">Categoria:</label>
        <select name="category">
            <option value="1">Sport</option>
            <option value="2">Informatica</option>
            <option value="3">Personale</option>
            <option value="4">Attualità</option>
        </select>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>