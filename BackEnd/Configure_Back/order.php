<?php
include "../../BackEnd/connect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user = $_SESSION['idUtente'];
$veicolo = $_SESSION['carId'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Controlla e inserisci le assistenze selezionate
    if (isset($_POST['assistance']) && !empty($_POST['assistance'])) {
        $assistenze = [
            'adaptiveSpeedAssist' => isset($_POST['adaptiveSpeedAssist']) ? 1 : 0,
            'hillStartAssist' => isset($_POST['hillStartAssist']) ? 1 : 0,
            'descentAssist' => isset($_POST['descentAssist']) ? 1 : 0,
            'parkingAssistant' => isset($_POST['parkingAssistant']) ? 1 : 0,
            'parkingAssistantPlus' => isset($_POST['parkingAssistantPlus']) ? 1 : 0,
            'laneChangeWarning' => isset($_POST['laneChangeWarning']) ? 1 : 0,
            'laneDepartureWarning' => isset($_POST['laneDepartureWarning']) ? 1 : 0,
        ];

        // Initialize an array to store selected assistance IDs
        $_SESSION['assistenze_selezionate'] = [];

        // Loop through the assistance options and get their IDs if selected
        foreach ($assistenze as $nome => $selected) {
            if ($selected) {
                $stmt = $conn->prepare("SELECT id FROM assistenza WHERE nome = ?");
                $stmt->bind_param("s", $nome);
                $stmt->execute();
                $stmt->bind_result($assistenza_id);
                $stmt->fetch();
                $stmt->close();

                if ($assistenza_id) {
                    $_SESSION['assistenze_selezionate'][] = $assistenza_id;
                }
            }
        }

        header('Location: success.html');
        exit();
    }
    if (isset($_POST['interior']) && !empty($_POST['interior'])) {
        $_SESSION['interior'] = isset($_POST['interior']) ? intval($_POST['interior']) : null;
        header('Location: success.html');
        exit();
    }

    if (isset($_POST['paint']) && !empty($_POST['paint'])) {
        $_SESSION['paint'] = isset($_POST['paint']) ? intval($_POST['paint']) : null;
        header('Location: success.html');
        exit();
    }

    if (isset($_POST['wheel']) && !empty($_POST['wheel'])) {
        $_SESSION['wheel'] = isset($_POST['wheel']) ? intval($_POST['wheel']) : null;
        header('Location: success.html');
        exit();
    }

    if (isset($_POST['motor']) && !empty($_POST['motor'])) {
        $_SESSION['motor'] = isset($_POST['motor']) ? intval($_POST['motor']) : null;
        header('Location: success.html');
        exit();
    }

    if (isset($_POST['options']) && !empty($_POST['options'])) {
        // Check if all required fields are set
        if (isset($_SESSION['paint']) && isset($_SESSION['motor']) && isset($_SESSION['wheel']) && isset($_SESSION['interior']) && isset($_POST['pack'])) {
            $selectedOptions = json_decode($_POST['options'], true);

            $_SESSION['pack'] = $_POST['pack'];
            $sql = "INSERT INTO configurazione (ID_pack, ID_colore, ID_motore, ID_cerchi, ID_interni) VALUES ('{$_POST['pack']}', '{$_SESSION['paint']}', '{$_SESSION['motor']}', '{$_SESSION['wheel']}', '{$_SESSION['interior']}')";
            if ($conn->query($sql) === TRUE) {
                $conf_id = $conn->insert_id;
                $_SESSION['conf_id'] = $conf_id;
                foreach ($selectedOptions as $index => $option) {
                    $sql = "INSERT INTO optional_conf (ID_conf, ID_optional) VALUES ('$conf_id', '$option')";
                    $conn->query($sql);
                }
                foreach ($_SESSION['assistenze_selezionate'] as $assistenza_id) {
                    $stmt = $conn->prepare("INSERT INTO assistenza_conf (ID_conf, ID_assistenza) VALUES (?, ?)");
                    $stmt->bind_param("ii", $conf_id, $assistenza_id);
                    $stmt->execute();
                    $stmt->close();
                }

                $sql = "INSERT INTO ordine (ID_utente, ID_veicolo, ID_conf, Stato_ordine) VALUES ('{$_SESSION['idUtente']}', '{$_SESSION['carId']}', '$conf_id', 'Bozza')";
                $conn->query($sql);

                header('Location: ../../FrontEnd/Checkout/index.php');
                exit();

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script>alert('Per favore seleziona tutte le opzioni richieste: paint, motor, wheel, pack, e interior.'); window.history.back();</script>";
        }
    }
    $conn->close();
}
?>