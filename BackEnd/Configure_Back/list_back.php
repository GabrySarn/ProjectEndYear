<?php
$_SESSION["order"] = 0;

if (isset($_GET['setCarId'])) {
  $_SESSION['carId'] = $_GET['setCarId'];

  if (!isset($_SESSION['idUtente'])) {
    $_SESSION["order"] = 1;
    echo "<script>
  window.onload = function() {
    alert('Utente non loggato!!');
    
    // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
    window.location.href = '../../FrontEnd/Login/Login.html';
  }
  </script>";
  } else {
 header('Location: ../Configure/index.php');
    exit();
  }
}