<?php
require '../connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "SELECT ID_utente, Email , Nome FROM utente WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $_SESSION['email'] = $email;
        $_SESSION['idUtente'] = $row['ID_utente'];
        $_SESSION['user'] = $row['Nome']; 

        $stmt->close();
        header("Location: ../../FrontEnd/Home/index.php");
    } else {
        echo '<script>alert("Utente non trovato!");</script>';
        header("Location: ../../FrontEnd/Login/Login.html");
    }
} else {
    header("Location: ../../FrontEnd/Login/Login.html");
}
