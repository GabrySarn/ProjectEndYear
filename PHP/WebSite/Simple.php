<?php
$host = 'localhost';
$uname = 'root';
$pwd='';
$db='f1';
$dbprefix='';

$mysqli = new mysqli($host,$uname,$pwd,$db);
if($mysqli->connect_errno){
    die('DB connection error: '.$mysqli->connect_error);
}

$sql= 'scrivi query';
$result = $mysqli->query($sql);
echo '<select name="pilota">';
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo '<option value ="'.$row.['idF1'].'">'.$row['nome'].'</option>';
}
echo '</select>';
$result->free();
$mysqli->close();