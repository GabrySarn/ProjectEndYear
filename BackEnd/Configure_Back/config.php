<?php
if (isset($_GET['package'])) {
  $_SESSION['Pack'] = $_GET['package'];
  header('Location: ../FrontEnd/Configure/index.php');
}

if(isset($_GET['interior'])) {
  $_SESSION['interior'] = $_GET['interior'];
  header('Location: ../FrontEnd/Configure/index.php');
}

