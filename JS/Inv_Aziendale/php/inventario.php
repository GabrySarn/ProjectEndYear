<?php
// Connessione al database (sostituisci con le tue credenziali)
require "connect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['email']) && isset($_SESSION['idUtente'])) {
    // Query per recuperare i dati dall'inventario
    $sql = "SELECT * FROM inventario";
    $result = $conn->query($sql);

    $rows = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    $conn->close();
}
?>