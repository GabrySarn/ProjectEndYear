<?php

require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $nome = $_POST["name"];
        $quantità = $_POST["quantity"];
        $prezzo = $_POST["amount"];
        $descriz = $_POST["descriz"];

        $sql = "INSERT INTO prodotti
     (Nome_prodotto, Quantità, Prezzo, Descriz) VALUES ('$nome', '$quantità', '$prezzo', '$descriz')";

        if ($conn->query($sql)) {
            header("Refresh: 1; url=home.php");
        } else {
            header("Refresh: 1; url=home.php");
            echo "<script>alert('Errore')</script>";
        }
    } else if (isset($_POST['remove'])) {
        $id_prod = $_POST['remove'];
        $delete_sql = "DELETE FROM prodotti WHERE ID = $id_prod";
        if ($conn->query($delete_sql)) {
            header("Refresh: 1; url=home.php");
        } else {
            header("Refresh: 1; url=home.php");
            echo "<script>alert('Errore')</script>";
        }
    }

}

$conn->close();
?>