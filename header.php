<?php
    define("TITLE", "Home | Maarten's Vinyl Shop");
    //constant named 'Title'
    include 'connect.php';

    session_start();
    error_reporting(0);
    /*A session is a way to store information (in variables) to be used across
    multiple pages.*/
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="css/foundation0.css">
</head>
<body>
<!-- "wider" top-bar menu for 'medium' and up -->
          <div id="widemenu" class="top-bar">
              <div class="top-bar-left">
                  <ul class="dropdown menu">
                      <li class="background">
                          <a href="index.php"class="button">
                            <div class="menu">Index</div></a></li>
                      <li class="background">
                          <a href="news.php" class="button">
                            <div class="menu">News</div></a></li>
                      <li class="background">
                          <a href="actions.php" class="button">
                            <div class="menu">Actions</div></a></li>
                      <li class="background">
                          <a href="about.php" class="button">
                            <div class="menu">About</div></a></li>
                      <li class="background">
                          <a href="jobs.php" class="button">
                            <div class="menu">Jobs</div></a></li>
                      <li class="background">
                          <a href="webshop.php" class="button">
                            <div class="menu">Webshop</div></a></li>
                      <li class="background">
                          <a href="contact.php" class="button">
                            <div class="menu">Contact</div></a></li>
                      <li class="background">
                          <a href="login.php" class="button">
                            <div class="menu">Login</div></a></li>
                  </ul>
              </div>
          </div>
</body>
