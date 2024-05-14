<?php
session_start();
$i=0;

$name = 'imcookie';
$value  = 'iamcookievalue';
setcookie($name,$value);
$i++;

$name = 'imnotcookie';
$value  = 'iamnotcookievalue';
setcookie($name,$value);
$i++;

echo 'Ho creato '. $i .' cookie';