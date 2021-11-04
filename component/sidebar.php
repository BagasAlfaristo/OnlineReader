<?php
 session_start();
 if (!$_SESSION['isLogin']) {
 header("location: ../page/loginPage.php");
 }else {
 include('../db.php');
 }
 echo '
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Manga Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="../page/dashboardPage.php">Manga Reader</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/dashboardPage.php">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/komikBerwarnaPage.php">Komik Berwarna</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/komikTerbaruPage.php">Komik Terbaru</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/komikHotPage.php">Komik Hot</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/genrePage.php">Genre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../page/editAccount.php">Akun</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../process/logoutProcess.php">Keluar</a>
    </li>
  </ul>
</nav>
 '
 
?>