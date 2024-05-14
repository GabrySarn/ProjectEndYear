<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Numeri</title>
</head>

<ul>

    <?php for ($i = 0; $i < 10; $i++): ?>
        <li>
            <?php $numeri[$i] = rand(0, 100) ?>
            <?php echo $numeri[$i] ?>
        </li>
        <?php if ($numeri[$i] % 2 == 0): ?>
            <p>è pari</p>
        <?php else: ?>
            <p>è dispari</p>
        <?php endif; ?>

    <?php endfor ?>
</ul>

<?php echo print_r($numeri) ?>

</html>