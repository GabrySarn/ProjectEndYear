<?php
require 'connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!(
    isset($_POST['email']) &&
    isset($_POST['password'])
)) {
    echo '<script>alert("Campo Mancante");</script>';
} else {
    $email = $_POST['email'];
    $passwordN = md5($_POST['password']);


    $sql = "SELECT password FROM utenti WHERE email = '$email'";
    $res = $conn->query($sql);

    if ($res !== false && $res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $passworddb = $row['password'];

        $updateSql = "UPDATE utenti SET password = '$passwordN' where email = '$email'";
        $updateRes = $conn->query($sql);

        if ($conn->query($updateSql) === TRUE) {
            $sql = "SELECT id, email FROM utenti WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();



                if (!(isset($_SESSION['email']) && (!isset($_SESSION['idUtente'])))) {
                    $_SESSION['email'] = $email;
                    $_SESSION['idUtente'] = $row['id'];
                } else {
                    echo 'errore';
                }

                $stmt->close();
                include 'goodlinks.php';
            } else {
                echo '<script>alert("Utente non trovato, Registrati");</script>';
            }
        } else    echo '<script>alert("Errore durante l\'inserimento!");</script>';
    }else{
            echo '<script>alert("Utente non esiste, Registrati!");</script>';
    }
}
