<?php
require 'connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "SELECT id, email FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $_SESSION['email'] = $email;
        $_SESSION['idUtente'] = $row['id'];

        $stmt->close();
        include "noteHome.php";
    } else {
        echo '<script>alert("Utente non trovato!");</script>';
    }
} else {
    //include "noteHome.php";
}
