<?php
 session_start();
  if ($_SESSION['login']!='aisyah') {
    header("Location: ../login/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RPL Solutions</title>

    <!-- style css -->
    <link rel="stylesheet" href="../style.css" />

    <!-- style font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- link icon -->
    <link rel="icon" href="../img/logo.svg">
  </head>
  <body>
    <!-- header section starts -->
    <header>
      <a href="#" class="logo"><img src="../img/logo.svg" alt="rpl solutions" /></a>

      <div id="menu-bar" class="icon fas fa-bars"></div>

      <div class="container-header">
        <nav class="navbar" id="navbar">
          <a href="../index.html">home</a>
          <a href="../index.html">about</a>
          <a href="../index.html">features</a>
          <a href="../index.html">contact</a>
          <a href="learning.php">learning</a>
          <a href="../challenge/challenge.php">challenge</a>
        </nav>

        <!-- <a href="#login"><img src="img/login.svg" alt="" /></a> -->
        <a href="../login/account.php" id="login" class="fa-solid fa-user"></a>
      </div>
    </header>
    <!-- header section ends -->

    <!-- learning section starts -->
    <section class="learning" id="learning">
      <h1 class="heading">learning</h1>
      <span>sumber : web programming unpas</span>

      <div class="learning-container">
        <a href="html/html.html" class="content">
          <div class="title">
            <h3>HTML dasar</h3>
          </div>
        </a>

        <a href="css/css.html" class="content">
          <div class="title">
            <h3>CSS dasar</h3>
          </div>
        </a>

        <a href="php/php.html" class="content">
          <div class="title">
            <h3>PHP dasar</h3>
          </div>
        </a>
      </div>
    </section>
    <!-- learning section ends -->

    <script src="../script.js"></script>
  </body>
</html>
