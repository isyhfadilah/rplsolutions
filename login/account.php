<?php
 session_start();
  if ($_SESSION['login']!='aisyah') {
    header("Location: login.php");
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

    <!-- link font awesome -->
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
          <a href="../learning/learning.php">learning</a>
          <a href="../challenge/challenge.php">challenge</a>
        </nav>

        <!-- <a href="#login"><img src="img/login.svg" alt="" /></a> -->
        <a href="account.php" id="login" class="fa-solid fa-user"></a>
      </div>
    </header>
    <!-- header section ends -->

    <!-- account section starts -->
    <section class="account" id="account">
      <h1 class="heading">my account</h1>

      <div class="account-container">
        <div class="account-content">
          <a href="#" class="icon-account">
            <img src="../img/login.svg" alt="" />
          </a>
          <div class="account-text">
            <h2>aisyah nur fadilah</h2>
            <span>xi rpl 4</span>
          </div>
        </div>

        <div class="btn-container">
          <a href="../index.html" class="btn">cancel</a>
          <a href="logout.php" id="back" class="btn">log out</a>
        </div>
      </div>
    </section>
    <!-- account section ends -->

    <script src="../script.js"></script>
  </body>
</html>
