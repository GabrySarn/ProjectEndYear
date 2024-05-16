<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "blazerdb";
$dbport = 3306;

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname,$dbport);

if ($conn->connect_error)
    die("DB failure ".$conn->connect_error);