<?php
require '../connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $sql = "SELECT ID_utente, Email , Nome , Cognome FROM utente WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();

        $_SESSION['email'] = $email;
        $_SESSION['idUtente'] = $row['ID_utente'];
        $_SESSION['nome'] = $row['Nome'];
        $_SESSION['cognome'] = $row['Cognome'];


        $stmt->close();
        if ($_SESSION["order"] == 1) {
            header('Location: ../../FrontEnd/Configure/index.php');
            $_SESSION["order"] = 0;
        } else {
            header("Location: ../../FrontEnd/Home/index.php");
        }

    } else {
        echo "<script>
            window.onload = function() {
                alert('Utente non loggato!!');
                
                // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
                window.location.href = '../../FrontEnd/Login/Login.html';
            }
            </script>";
    }
} else {
    echo "<script>
    window.onload = function() {
        alert('Utente non loggato!!');
        
        // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
        window.location.href = '../../FrontEnd/Login/Login.html';
    }
    </script>";
}
