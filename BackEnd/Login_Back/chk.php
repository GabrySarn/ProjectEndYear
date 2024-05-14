<?php
// Avvia la sessione se non è già avviata
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Controlla se l'utente è loggato
if (isset($_SESSION['idUtente'])) {
    // Se l'utente è loggato, reindirizzalo alla home
    header("Location: ../../FrontEnd/Home/index.html");
} else {
    // Se l'utente non è loggato, reindirizzalo immediatamente alla pagina di login
    header("Location: ../../FrontEnd/Login/Login.html");
}
?>
