<?php

require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $name = $_POST["name"];
        $quantity = $_POST["quantity"];
        $amount = $_POST["amount"];

        $sql = "INSERT INTO inventario
     (Nome_prodotto, Quantità, Prezzo_unitario) VALUES ('$name', '$quantity', '$amount')";

        if ($conn->query($sql)) {
            header("Refresh: 1; url=home.php");
        } else {
            header("Refresh: 1; url=home.php");
            echo "<script>alert('Errore')</script>";
        }
    } else if (isset($_POST['remove'])) {

    }

}

$conn->close();
?>