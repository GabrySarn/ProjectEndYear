<?php

$data = date("d-m-Y", 0);  //unix timestamp
$data = date("d.m.Y", 0);  //01/01/1970
$data = date("d/m/Y", 0);
echo $data;

//$data = date("D", 0);  //thu
//$data = date("l", 0);       //thursday
//$data = date("M", 0);       //Jan(uary)
$data = date("y", 0);       //05
echo $data;

echo time();



?>