<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodotti Magazzino</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/convVal.js"></script>
  <script src="../js/prod_validate.js"></script>

</head>

<body>

  <?php include 'inventario.php';
  include "header.php"; ?>

  <div class="container mt-5">
    <br>
    <table class="table mt-5">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome Prodotto</th>
          <th>Quantità</th>
          <th>Prezzo</th>
          <th>Descrizione</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($rows as $row): ?>
          <tr>
            <td>
              <?php echo $row["ID"]; ?>
            </td>
            <td>
              <?php echo $row["Nome_Prodotto"]; ?>
            </td>
            <td>
              <?php echo $row["Quantità"]; ?>
            </td>
            <td>
              <?php echo $row["Prezzo"]; ?>
            </td>
            <td>
              <?php echo $row["Descriz"]; ?>
            </td>
            <td>
              <form method='post' action='product.php' style='display:inline-block; margin-left: 5px;'>
                <input type='hidden' name='remove' value='<?php echo $row["ID"]; ?>'>
                <button type='submit' class='btn btn-danger btn-sm'>Elimina</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>