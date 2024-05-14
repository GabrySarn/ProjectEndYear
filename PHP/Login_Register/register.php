<?php
require 'connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$MAX_LENGHT = 30;
$err = 0;

if ((
    isset($_POST['nome']) &&
    isset($_POST['cognome']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['yob']))) {

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $yob = $_POST['yob'];

    if (!(ctype_alpha($nome) && ctype_alpha($cognome))) {
        echo '<script>alert("Nome/Cognome non conforme");</script>';
    } else {
        $sql = "INSERT INTO users(mame,surname,email,password)
            VALUES('$nome', '$cognome' , '$email' , '$password' )";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['email'] = $email;

            $sql = "SELECT id FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email,);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();
                $_SESSION['idUtente'] = $row['id'];

                include 'noteHome.php';
            }
        } else {
            echo '<script>alert("Errore durante l\'inserimento!");</script>';
        }
    }
} else {
    include 'noteHome.php';
}
