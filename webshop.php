<?php
  include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="css/foundation0.css">
</head>
<body>
<div class="row">
<div class="content">
  <div class="large-3 columns">
    <?php include 'category.php'; ?>
  </div>
  <div class="large-9 columns">
      <form>
        <input type="text" value="search">
        <input type="button" value="button">
        <p>
          1367 Producten |
          Toon
          <select>
            <option>10</option>
            <option selected>20</option>
            <option>30</option>
            <option>40</option>
          </select>
          per pagina
        </p>
      </form>

      <div class="list">
        <?php
        $sql ="SELECT AFBEELDING_KLEIN FROM Product";
        $params = array();
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
          die (print_r(sqlsrv_errors(), true));
        }
        else {
          echo "string";
        }
    ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
