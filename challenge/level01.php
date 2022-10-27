<?php
if ( isset($_POST["submit"]) ){
  if ( $_POST["answer"] == "<table>" ){
    header("Location: level02.php");
    exit;
  } else {
    $error = true;
  }
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

    <!-- style boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />

    <!-- link icon -->
    <link rel="icon" href="../img/logo.svg" />
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
          <a href="challenge.html">challenge</a>
        </nav>

        <!-- <a href="#login"><img src="img/login.svg" alt="" /></a> -->
        <a href="../login/account.php" id="login" class="fa-solid fa-user"></a>
      </div>
    </header>
    <!-- header section ends -->

    <!-- level 01 section starts -->
    <section class="level01" id="level01">
      <h1 class="heading">level 01</h1>

      <div class="level01-container">
        <img src="../img/level01.svg" alt="" />
        <p>ketikkan kesalahan yang menyebabkan kode tersebut error?</p>

        <form action="" method="post">
          <?php if( isset ($error)) :?>
            <span>jabawan anda kurang tepat</span>
          <?php endif; ?>

          <input type="text" name="answer" class="form form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="answer" />

          <div class="btn-container">
            <input type="submit" class="btn" name="submit" value="submit" />
            <a href="index.php" class="btn-diss">discussion</a>
          </div>
        </form>
      </div>
    </section>
    <!-- level 01 section ends -->

    <script src="../script.js"></script>
  </body>
</html>
