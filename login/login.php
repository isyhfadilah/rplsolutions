<?php 
//cek tombol submit
if ( isset($_POST["submit"]) ){
  //cek username & pass
  if ( $_POST["nama"] == "aisyah" && $_POST["password"] == "122" ){
  //benar, redirect ke halaman admin
  session_start();
  $_SESSION["login"] = "aisyah";
  header("Location: account.php");
  exit;
} else {
  //salah
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
    <title>RPL solutions</title>

    <!-- style css -->
    <link rel="stylesheet" href="../style.css" />

    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- style boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />

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

    <!-- login section starts -->
    <section class="login">
      <h1 class="heading">login</h1>

      <div class="login-container">
        <form action="login.php" method="post">
          <?php if( isset($error) ) : ?>
            <span>username / password salah</span>
          <?php endif; ?>

          <input type="text" name="nama" class="form form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" />
          <input type="password" name="password" class="form form-control" id="exampleInputPassword1" placeholder="password" />

          <div class="btn-container">
          <input type="submit" class="btn" name="submit" value="sign in">
          <a href="../index.html" class="btn-login">cancel</a>
        </div>
        </form>

      </div>
    </section>
    <!-- login section ends -->

    <script src="../script.js"></script>
  </body>
</html>
