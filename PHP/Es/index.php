<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial PHP</title>
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
    <h1>Form Esempio</h1>
    <form method="POST" action="Stringa.php"> <!--POST= MANDARE I DATI-->
        <label for="nome">
            <?php echo $nome ?>
        </label>
        <input type="text" id="nome" name="nome" placeholder="Inserisci nome">
        <label for="cognome">Cognome</label>
        <input type="text" id="cognome" name="cognome" placeholder="Inserisci cognome">
        <input type="submit" value="Invia dati">
    </form>

    <?php $numero = 5; ?>

    <?php if ($numero == 0): ?>
        <p>Condizione 1 verificata</p>
    <?php elseif ($numero == 5): ?>
        <p>Condizione 2</p>
    <?php else: ?>
        <p>Default Content</p>
    <?php endif; ?>

    <ul>
        <!-- <?php for ($i = 1; $i < 6; $i++): ?>
            <li>List Item <?php echo $i ?>
            </li>
        <?php endfor; ?> -->


    </ul>
</body>

</html>