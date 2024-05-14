<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $stmt1 = $conn->prepare("CALL countPrenotazioni()");
    $stmt1->execute();
    $stmt1->bind_result($prenotazioni);
    $stmt1->fetch();
    $stmt1->close();

    $sqlPtot = "SELECT SUM(posti_tot) AS total FROM tavoli";
    $result = $conn->query($sqlPtot);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $posti_tot = $row["total"];
    } else {
        echo "<script>alert('Errore nel recupero dei posti disponibili')</script>";
    }

    if ($prenotazioni < $posti_tot && (($posti_tot-$prenotazioni)>$guests)) {
        $sql = "INSERT INTO bookings (name, surname, email, phone, date, time, guests) VALUES ('$name','$surname', '$email', '$phone', '$date', '$time', '$guests')";
        if ($conn->query($sql) === TRUE) {  
            echo "<script>alert('Prenotazione confermata, ti aspettiamo!')</script>";
        } else {
            echo "<script>alert('Errore nella prenotazione, riprova')</script>";
        }
    } else {
        echo "<script>alert('Non ci sono posti disponibili')</script>";
    }

}


$conn->close();
?>
