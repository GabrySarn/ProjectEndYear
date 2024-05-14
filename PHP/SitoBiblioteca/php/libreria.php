<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
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
    } else {
        echo '<script>alert("Errore: ID utente non definito nella sessione.");</script>';
    }

    if (isset($_GET['action']) && $_GET['action'] == 'cancella_prenotazione' && isset($_GET['isbn'])) {
        $isbn = $_GET['isbn'];
        $queryDisp = "UPDATE libro SET Disponibilita = 1 WHERE ISBN = $isbn;";
        $res = $conn->query($queryDisp);

        if (!$res) {
            echo '<script>alert("Errore nella query di aggiornamento disponibilità");</script>';
        }

        $queryPrenotazione = "UPDATE prenotazioni SET enabled = 0 WHERE ISBNLibro = ?";

        $stmtPrenotazione = $conn->prepare($queryPrenotazione);
        $stmtPrenotazione->bind_param("s", $isbn);
        $resPrenotazione = $stmtPrenotazione->execute();

        if (!$resPrenotazione) {
            echo '<script>alert("Errore nella query di cancellazione prenotazione");</script>';
        }
    }

    $whereClause = "";

    if (isset($_GET['genere']) && !empty($_GET['genere'])) {
        $genere = $_GET['genere'];
        $whereClause .= " AND g.NomeGenere = '$genere'";
    }

    if (isset($_GET['autore']) && !empty($_GET['autore'])) {
        $autore = $_GET['autore'];
        $whereClause .= " AND a.NomeAutore = '$autore'";
    }

    $query = "SELECT DISTINCT
    l.ISBN,
    l.Titolo,
    a.NomeAutore,
    l.AnnoPubblicazione,
    b.NomeBiblioteca,
    l.Disponibilita,
    l.Copertina,
    g.NomeGenere,
    ce.NomeCasaEditrice
    FROM
        libro l
    JOIN
        biblioteche b ON l.BibliotecaID = b.BibliotecaID
    JOIN
        genere g ON l.GenereID = g.GenereID
    JOIN
        casaeditrice ce ON l.CasaEditriceID = ce.CasaEditriceID
    JOIN
        autori a ON a.AutoreID = l.AutoreID
    LEFT JOIN 
        prenotazioni p ON l.ISBN = p.ISBNLibro AND p.UtenteID = $idUtente
    WHERE l.Disponibilita = 0 AND p.Enabled = 1 $whereClause";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    $libri = array();
    $i = 0;
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $libri[$i] = $row;
            $i++;
        }
    } else {
        echo $conn->error;
    }
    $stmt->close();
    $conn->close();

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: Login.html");
        exit;
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Libreria di Gabry</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><img src="../ico/home.png" alt="Icona" width="30" height="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php?logout=1"><img src="../ico/logout.png" alt="Icona" width="30" height="30"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <form method="get" class="row">
            <div class="form-group col-md-3">
                <label for="genere">Filtra per Genere</label>
                <input class="form-control" type="search" aria-label="Search" id="genere" name="genere">
            </div>
            <div class="form-group col-md-3">
                <label for="autore">Filtra per Autore</label>
                <input class="form-control" type="search" aria-label="Search" id="autore" name="autore">
            </div>
            <div class="form-group col-md-2 align-self-end">
                <button class="btn btn-outline-success" type="submit">Filtra</button>
            </div>
        </form>
    </div>


    <div class="container">
        <div class="row">
            <?php foreach ($libri as $libro) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 21rem;">
                        <img src="<?= "../img/" . $libro["Copertina"]; ?>" class="card-img-top" alt="Copertina libro">
                        <div class="card-body">
                            <h5 class="card-title"><?= $libro["Titolo"]; ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Autore:</strong> <?= $libro["NomeAutore"]; ?></li>
                                <li class="list-group-item"><strong>Anno Pubblicazione:</strong> <?= $libro["AnnoPubblicazione"]; ?></li>
                                <li class="list-group-item"><strong>Biblioteca:</strong> <?= $libro["NomeBiblioteca"]; ?></li>
                                <li class="list-group-item"><strong>Genere:</strong> <?= $libro["NomeGenere"]; ?></li>
                                <li class="list-group-item"><strong>Casa Editrice:</strong> <?= $libro["NomeCasaEditrice"]; ?></li>
                                <li class="list-group-item"><strong>ISBN:</strong> <?= $libro["ISBN"]; ?></li>
                                <?php if (!$libro["Disponibilita"]) : ?>
                                    <a href="?action=cancella_prenotazione&isbn=<?= $libro['ISBN']; ?>" class="btn btn-primary">Cancella Prenotazione</a>
                                <?php else : ?>
                                    <p class="text-danger">Libro non più prenotato</p>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>