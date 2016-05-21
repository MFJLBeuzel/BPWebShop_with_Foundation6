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

         ?>
        <img src="source.php?id=1" width="180" />
        <img src="source.php?id=2" width="180" />
      </div>

    </div>
  </div>
</div>
</body>
