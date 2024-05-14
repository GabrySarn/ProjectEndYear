<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestione Inventario</title>
  <!-- Collegamento ai file CSS di Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/convVal.js"></script>
</head>

<body>

  <?php include 'inventario.php';
  include "header.php"; ?>

  <div class="container mt-5">
    <br>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome Prodotto</th>
          <th>Quantità</th>
          <th>Prezzo Unitario</th>
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
              <?php echo $row["Prezzo_Unitario"]; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>