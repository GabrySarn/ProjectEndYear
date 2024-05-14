<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "map";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Query per recuperare i dati del percorso 1
$sql = "SELECT w.lat, w.lng FROM coord c JOIN waypoints w ON c.idwp = w.id WHERE c.idmst = 1 ORDER BY c.pos";
$result = $conn->query($sql);

// Creazione dell'array con i dati del percorso 1
$coordinates1 = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $coordinates1[] = [$row["lat"], $row["lng"]];
    }
}

// Query per recuperare i dati del percorso 2
$sql = "SELECT w.lat, w.lng FROM coord c JOIN waypoints w ON c.idwp = w.id WHERE c.idmst = 2 ORDER BY c.pos";
$result = $conn->query($sql);

// Creazione dell'array con i dati del percorso 2
$coordinates2 = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $coordinates2[] = [$row["lat"], $row["lng"]];
    }
}
$conn->close();

echo "var coordinates1 = " . json_encode($coordinates1) . ";";
echo "var coordinates2 = " . json_encode($coordinates2) . ";";
?>