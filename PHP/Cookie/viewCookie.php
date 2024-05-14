<?php

session_start();

echo 'Hello' . htmlspecialchars($_COOKIE['iamcookie']) . '!<br><br>';
foreach ($_COOKIE as $n => $v) {
    echo 'Hello' . $n . 'with value ' . htmlspecialchars($_COOKIE['iamcookie']) . '!<br><br>';
}
$_SESSION['persona'] = 'ricci';
