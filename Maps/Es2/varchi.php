<?php

include "connect.php";
$sql = "SELECT * FROM varchi";
$result = $conn->query($sql);

$varchi = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $varchi[] = $row;
    }
}

$conn->close();

echo "var varchi = " . json_encode($varchi) . ";";

?>
