<?php
// Avvia la sessione se non è già avviata
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['login']) && $_GET['login'] == 1) {
    // Controlla se l'utente è loggato
    if (isset($_SESSION['idUtente'])) {
        // Se l'utente è loggato, reindirizzalo alla home
        header("Location: index.php");
    } else {
        // Se l'utente non è loggato, reindirizzalo immediatamente alla pagina di login
        echo "<script>
    window.onload = function() {
        alert('Utente non loggato!!');
        
        // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
        window.location.href = '../../FrontEnd/Login/Login.html';
    }
    </script>";
    }
}

$isLoggedIn = isset($_SESSION['nome']);
$username = $isLoggedIn ? $_SESSION['nome'] : '';

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>