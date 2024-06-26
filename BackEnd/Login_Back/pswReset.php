<?php
require '../connect.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (
    !(
        isset($_POST['email']) &&
        isset($_POST['password'])
    )
) {
    echo '<script>alert("Campo Mancante");</script>';
} else {
    $email = $_POST['email'];
    $passwordN = md5($_POST['password']);


    $sql = "SELECT Password FROM utente WHERE Email = '$email'";
    $res = $conn->query($sql);

    if ($res !== false && $res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $passworddb = $row['Password'];

        $updateSql = "UPDATE utente SET Password = '$passwordN' where Email = '$email'";
        $updateRes = $conn->query($sql);

        if ($conn->query($updateSql) === TRUE) {
            $sql = "SELECT ID_utente, Email, Nome , Cognome FROM utente WHERE Email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $res = $stmt->get_result();

            if ($res->num_rows > 0) {
                $row = $res->fetch_assoc();



                if (!(isset($_SESSION['email']) && (!isset($_SESSION['idUtente'])))) {
                    $_SESSION['email'] = $email;
                    $_SESSION['idUtente'] = $row['ID_utente'];
                    $_SESSION['nome'] = $row['Nome']; 
                    $_SESSION['cognome'] = $row['Cognome']; 
                } else {
                    echo 'errore';
                }

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
                    alert('Utente non trovato!!');
                    
                    // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
                    window.location.href = '../../FrontEnd/Login/Login.html';
                }
                </script>";
            }
        } else {
            echo "<script>
            window.onload = function() {
                alert('Utente non trovato!!');
                
                // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
                window.location.href = '../../FrontEnd/Login/Login.html';
            }
            </script>";
        }
    } else {
        echo "<script>
        window.onload = function() {
            alert('Utente non trovato!!');
            
            // Una volta che l'utente fa clic su OK, reindirizza a una pagina PHP
            window.location.href = '../../FrontEnd/Login/Login.html';
        }
        </script>";

    }
}
