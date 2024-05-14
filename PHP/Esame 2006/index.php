<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bernocchi</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 40px;
        }

        input {
            margin: 10px 0;
        }
    </style>
</head>

<?php

$nome = 'Nome';

?>



<body>
    <h1>Login</h1>
    <form method="POST" action="ctrl.php"> <!--POST= MANDARE I DATI-->
        <label for="nome">Email</label>
        <input type="email" id="email" name="email" placeholder="Inserisci email">
        <label for="cognome">Password</label>
        <input type="Password" id="password" name="password" placeholder="Inserisci password">
        <input type="submit" value="Invia dati">
    </form>
</body>
</html>