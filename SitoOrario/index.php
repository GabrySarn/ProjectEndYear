<!DOCTYPE html>
<html lang="en">

<head>
<link href="CSS/style.css" rel="stylesheet" type="text/css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bernocchi</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 10px;
            padding-left: 100px;
        }

        input {
            margin: 10px 0;  
        }
    </style>
</head>

<?php

$nome = 'Nome';

?>



<body class="Pacifico">
    <h1>Login</h1>
    <form method="POST" action="link.php"> <!--POST= MANDARE I DATI-->
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Inserisci email">
        <label for="Password">Password</label>
        <input type="Password" id="password" name="password" placeholder="Inserisci password">
        <input  id="btnOk" type="submit" value="Accedi">
    </form>
    <script src="js/login.js"></script>
</body>

</html>