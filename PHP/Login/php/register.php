<?php
require 'connect.php';

session_start();

$MAX_LENGHT = 30;
$err = 0;

if (!(
    isset($_POST['nome']) &&
    isset($_POST['cognome']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['yob']) &&
    isset($_POST['radio'])
)) {
    echo "Campo Mancante";
} else {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $yob = $_POST['yob'];
    $hobby = $_POST['radio'];

    if (!(ctype_alpha($nome) && ctype_alpha($cognome))) {
        echo 'Nome/Cognome non conforme';
        $err = 1;
    } else if (!($yob < 3000 && ctype_digit($yob))) {
        $err = 1;
        echo 'Anno di Nascità non conforme';
    }else{
          $stmt = $conn->prepare("SELECT * FROM utenti WHERE email = ?");
          $stmt->bind_param("s", $email);
          $stmt->execute();
          $result = $stmt->get_result();
          
          if ($result->num_rows > 0) {
              $err = 1;
              echo 'L\'utente è già registrato';
          }
          $stmt->close();
      }
    }

if ($err == 0) {
    $sql = "INSERT INTO utenti(nome,cognome,email,password,yob,hobby)
VALUES('$nome', '$cognome' , '$email' , '$password','$yob' , '$hobby')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['email'] = $email;
        echo "Utente registrato con successo";
    } else {
        echo "Errore inserimento: $conn->error";
    }

    $conn->close();
} else {
    echo '<br>'."La registrazione non e andata a buon fine";
}
