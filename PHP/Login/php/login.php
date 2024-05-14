<?php
require 'connect.php';

session_start();

if (isset($_SESSION['email'])) {
    echo "Utente gia loggato";
} else {

    if (!(
        isset($_POST['email']) &&
        isset($_POST['password'])
    )) {
        echo "Campo Mancante";
    } else {
        $email = $_POST['email'];
        $password = md5($_POST['password']);


        $sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password' ";
        $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            $_SESSION['email'] = $email;
            echo "Utente loggato con successo";
        } else {
            echo "Utente non trovato, Registrati: $conn->error";
        }
    }
    $conn->close();
}
