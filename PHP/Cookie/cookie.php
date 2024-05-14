<?php
if (!isset($_COOKIE["count"])) {
    $i = 0;
    setcookie(
        "count",
        $i,
        time() + (86400 * 30),
        "/"
    ); //slash: valido su tutto il dominio
} else {
    $i = $_COOKIE["count"];
    $i++;
    setcookie(
        "count",
        $i,
        time() + (86400 * 30),
        "/"
    ); //slash: valido su tutto il dominio 

}
echo $_COOKIE["count"];
