<?php
session_start(); 
require_once"app.php";

$p = getAllData($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sudana Film</title>

    <!-- Box icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- custom css -->
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <a href="#" class="logo">Sudana<span>Flix</span></a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="home.php" class="active">Menu</a>
        <a href="mylist.php">Mylist</a>
      </nav>
    </header>

    <!-- home section design -->
    <div class="hero-section">
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Sudana Wijaya</h1>
        <h3>Saya <span class="multiple-text"></span></h3>
        <p>
          Ini adalah website film saya untuk memenuhi tugas
          Ujian Tengah Semester saya. Terima kasih
        </p>
        

        <div class="social-media">
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-tiktok"></i></a>
          <a href="#"><i class="bx bxl-facebook"></i></a>
        </div>
        <a href="movies.php" class="btn">+ Daftar Saya</a>
      </div>
      <div class="home-image">
        <img src="R.jpeg" />
      </div>


 
    </section>
    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright @ 2024 by Sudanawijaya | ALL Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- custom js -->
    <script src="java.js"></script>
  </body>
</html>
