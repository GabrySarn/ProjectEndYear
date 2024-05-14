<?php
require 'connect.php';

session_start();

if (!(
    isset($_POST['email']) &&
    isset($_POST['passwordOld']) &&
    isset($_POST['passwordNew'])
)) {
    echo "Campo Mancante";
} else {
    $email = $_POST['email'];
    $passwordO = md5($_POST['passwordOld']);
    $passwordN = md5($_POST['passwordNew']);


    $sql = "SELECT password FROM utenti WHERE email = '$email' AND password = '$passwordO' ";
    $res = $conn->query($sql);

    if ($res!== false && $res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $passworddb = $row['password'];

        if ($passworddb === $passwordO) {
            $updateSql = "UPDATE utenti SET password = '$passwordN' where email = '$email' AND password = '$passwordO' ";
            $updateRes = $conn->query($sql);

            if ($conn->query($updateSql) === TRUE) {
                $_SESSION['email'] = $email;
                echo "Password modificata con successo";
            }
            
        } else {
            echo "Utente non trovato / Password errata, Registrati: $conn->error";
        }
    }
}
$conn->close();
