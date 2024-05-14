<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Prenotazioni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestione Prenotazioni</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><img src="ico/home.png" alt="Icona" width="30" height="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php?logout=1"><img src="ico/logout.png" alt="Icona" width="30"
                            height="30"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Elenco Prenotazioni</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Data</th>
                    <th>Ora</th>
                    <th>Ospiti</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'php/connect.php';

                $sql = "SELECT * FROM bookings";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["surname"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>" . $row["time"] . "</td>";
                        echo "<td>" . $row["guests"] . "</td>";
                        echo "<td>";
                        echo "<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#editModal" . $row["id"] . "'>Modifica</button>";
                        echo "<form method='post' action='php/booking.php' style='display:inline-block; margin-left: 5px;'>";
                        echo "<input type='hidden' name='delete_booking_id' value='" . $row["id"] . "'>";
                        echo "<button type='submit' class='btn btn-danger btn-sm'>Elimina</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";

                        echo "<div class='modal fade' id='editModal" . $row["id"] . "' tabindex='-1' role='dialog' aria-labelledby='editModalLabel" . $row["id"] . "' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='editModalLabel" . $row["id"] . "'>Modifica Prenotazione</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        echo "<!-- Form per la modifica della prenotazione -->";
                        echo "<form method='post' action='php/booking.php'>";
                        echo "<div class='form-group'>";
                        echo "<label for='new_date'>Nuova Data</label>";
                        echo "<input type='date' class='form-control' name='new_date' value='" . $row["date"] . "'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='new_time'>Nuova Ora</label>";
                        echo "<input type='time' class='form-control' name='new_time' value='" . $row["time"] . "'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='new_guests'>Nuovo Numero di Ospiti</label>";
                        echo "<select class='form-control' name='new_guests'>";
                        for ($i = 1; $i <= 10; $i++) {
                            if ($i == $row["guests"]) {
                                echo "<option selected>$i</option>";
                            } else {
                                echo "<option>$i</option>";
                            }
                        }
                        echo "</select>";
                        echo "</div>";
                        echo "<input type='hidden' name='update_booking' value='" . $row["id"] . "'>";
                        echo "<button type='submit' class='btn btn-primary'>Salva Modifiche</button>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nessuna prenotazione trovata.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
