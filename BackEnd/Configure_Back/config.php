<?php
if (isset($_GET['package'])) {
  $_SESSION['pack'] = $_GET['package'];
}

if(isset($_GET['interior'])) {
  $_SESSION['interior'] = $_GET['interior'];
  header('Location: success.html');
}

if (isset($_GET['paint'])) {
  $_SESSION['paint'] = $_GET['paint'];
  header('Location: success.html');
}

if (isset($_GET['wheel'])) {
  $_SESSION['wheel'] = $_GET['wheel'];
  header('Location: success.html');
}

if (isset($_GET['motor'])) {
  $_SESSION['motor'] = $_GET['motor'];
  header('Location: success.html');
}