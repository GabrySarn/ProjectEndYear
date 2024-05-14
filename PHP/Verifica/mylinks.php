<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Links</title>
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
            isset($_POST['action']) && $_POST['action'] == 'Rimuovi'
        ) {

            $query = "";

            $stmtPrenotazione = $conn->prepare($query);
            $stmtPrenotazione->bind_param();
            $resPrenotazione = $stmtPrenotazione->execute();

            $stmtPrenotazione->close();
        }

        $whereClause = "";

        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $cat = $_GET['category'];
            $whereClause .= " AND c.descriz = '$cat'";
        }

        $query = "SELECT DISTINCT l.url,l.title,c.descriz
        FROM links l
        Join category c on l.idCategory=c.id
        where  l.idUtente = '$idUtente' '$whereClause'";

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $links = array();
        $i = 0;
        if ($result !== false && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $links[$i] = $row;
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
                    <a class="nav-link" href="goodlinks.php"><img src="ico/home.png" alt="Icona" width="30" height="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="goodlinks.php?logout=1"><img src="ico/logout.png" alt="Icona" width="30" height="30"></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <form method="get" class="row">
            <div class="form-group col-md-3">
                <label for="genere">Filtra per Categoria</label>
                <input class="form-control" type="search" aria-label="Search" id="category" name="category">
            </div>
            <div class="form-group col-md-2 align-self-end">
                <button class="btn btn-outline-success" type="submit">Filtra</button>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($links as $link) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 21rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $link["title"]; ?></h5>
                            <ul class="list-group list-group-flush">
                               Url: <a  href="#" onclick="handleLinkClick('<?= $link['url']; ?>', event);">
                                <li class="list-group-item"><strong></strong> <?= $link["url"]; ?></li>
                                </a>
                                <li class="list-group-item"><strong>Categoria:</strong> <?= $link["descriz"]; ?></li>
                                <li class="list-group-item">Visto
                                    <input type="checkbox" class="link-checkbox" data-url="<?= $link["url"]; ?>">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</html>
<script>
        function handleLinkClick(url, event) {
            event.preventDefault();

            var checkboxes = document.querySelectorAll('.link-checkbox');
            checkboxes.forEach(function (checkbox) {
                if (checkbox.getAttribute('data-url') === url) {
                    checkbox.checked = true;
                }
            });
            window.open(url, '_blank');
        }
    </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>