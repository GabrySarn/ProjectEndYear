<?php
require 'connect.php';

// Gestione eliminazione prenotazione
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_booking_id'])) {
    $booking_id = $_POST['delete_booking_id'];
    $delete_sql = "DELETE FROM bookings WHERE id = $booking_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Prenotazione eliminata con successo!')</script>";
    } else {
        echo "<script>alert('Errore durante l\'eliminazione della prenotazione')</script>";
    }
}

// Gestione modifica prenotazione
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_booking'])) {
    $booking_id = $_POST['update_booking'];
    $new_date = $_POST['new_date'];
    $new_time = $_POST['new_time'];
    $new_guests = $_POST['new_guests'];
    $update_sql = "UPDATE bookings SET date = '$new_date', time = '$new_time', guests = '$new_guests' WHERE id = $booking_id";
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Prenotazione modificata con successo!')</script>";
    } else {
        echo "<script>alert('Errore durante la modifica della prenotazione')</script>";
    }
}
$conn->close();

header("Location: ../index.php");
exit; 


?>
