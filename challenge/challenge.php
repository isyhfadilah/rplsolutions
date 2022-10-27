<?php 
  session_start();
    if($_SESSION['login']!='aisyah'){
      header("Location: ../login/account.php");
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
          <a href="#challenge">challenge</a>
        </nav>

        <!-- <a href="#login"><img src="img/login.svg" alt="" /></a> -->
        <a href="../login/account.php" id="login" class="fa-solid fa-user"></a>
      </div>
    </header>
    <!-- header section ends -->

    <!-- challenge section starts -->
    <section class="challenge" id="challenge">
      <h1 class="heading">challenge</h1>

      <div class="challenge-container">
        <h4 class="heading-about">cara bermain</h4>

        <ul class="aturan">
          <li>sebelum klik tombol start playing, anda diwajibkan untuk menonton video yang ada pada bagian learning ( minimal satu video )</li>
          <li>setelah klik tombol start playing, anda akan diarahkan ke halaman website berikutnya untuk bermain.</li>
          <li>anda juga akan mendapatkan sebuah tim secara acak, sehingga nantinya dapat menyelesaikan challenge bersama melalui diskusi room yang mana dalam setiap levelnya akan diberi waktu beberapa menit.</li>
        </ul>

        <a href="level01.php" class="btn">start playing</a>
      </div>
    </section>
    <!-- challenge section ends -->

    <script src="../script.js"></script>
  </body>
</html>
