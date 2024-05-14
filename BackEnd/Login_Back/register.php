<?php
require '../connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$MAX_LENGHT = 30;
$err = 0;

if (
    (
        isset($_POST['nome']) &&
        isset($_POST['cognome']) &&
        isset($_POST['email']) &&
        isset($_POST['password']) &&
        isset($_POST['data_nascita']))
) {

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $dn = $_POST['data_nascita'];

    if (!(ctype_alpha($nome) && ctype_alpha($cognome))) {
        echo '<script>alert("Nome/Cognome non conforme");</script>';
    } else {
        $sql = "INSERT INTO utente(Nome,Cognome,Email,Password,Data_Nascita)
            VALUES('$nome', '$cognome' , '$email' , '$password','$dn' )";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['email'] = $email;

            $sql = "SELECT ID_utente FROM utente WHERE Email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email, );
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();
                $_SESSION['idUtente'] = $row['ID_utente'];

                header("Location: ../../FrontEnd/Home/index.html");
            }
        } else {
            echo '<script>alert("Errore durante l\'inserimento!");</script>';
            header("Location: ../../FrontEnd/Login/Login.html");
        }
    }
} else {
    header("Location: ../../FrontEnd/Login/Login.html");

}
