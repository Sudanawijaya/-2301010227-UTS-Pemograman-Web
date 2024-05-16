<?php
session_start(); 
require_once"app.php";

$p = getAllData($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudana Film</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
:root{
    --text-color: #fff;
    --bg-color: #ff2400;
    --second-bg-color: #000;
    --main-color: #fff;
    --other-color: #c3cad5;

    --h1-font: 4.5rem;
    --h2-font: 2.9rem;
    --p-font: 1rem
}
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #141414;
    color: #black;
}

header {
    background-color: #000;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #e50914;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

.search-container {
    position: relative;
}

#searchInput {
    padding: 5px 10px 5px 30px;
    border: none;
    border-radius: 3px;
    font-size: 1rem;
    background-color: #333;
    color: #fff;
}

#searchIcon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #000;
    cursor: pointer;
}

/* .film-card {
    width: 300px;
    background-color: #222;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 20px;
    color: #fff;
} */

.film-card img {
    width: 100%;
    height: auto;
}

.film-info {
    padding: 15px;
}

.film-title {
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.film-description {
    font-size: 0.9rem;
    color: #bbb;
    margin-bottom: 10px;
}

.film-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.8rem;
    color: #888;
}

#moviesContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 80px; /* Adjusting for fixed header */
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: ##e50914;
    margin: 0px;
    padding: 0px;
}

.container1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    position: relative;
    padding-top: 80px; /* Menambahkan jarak dari atas */
}



.card {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    margin: 15px;
    max-width: 300px;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

.card-image img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    width: 100%;
    height: auto;
}

.card-content {
    padding: 20px;
    text-align: center;
}

.card-content h3 {
    color: #333;
    font-size: 1.5em;
    margin: 15px 0 10px;
}

.card-content p {
    color: #777;
    font-size: 1em;
    margin: 0 0 20px;
}

.card-content button {
    background-color: #e50914;
    border: none;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
    font-size: 1em;
    padding: 10px 20px;
    transition: background-color 0.3s;
}
.a-btn{
    display: inline-block;
    padding: 11px 26px;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    transition: all .50s ease;
    text-decoration: none;
}
.a-btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: 0 0 20px var(--main-color);
    transform: scale(1.1);
}

body {
    font-family: Arial, sans-serif;
    color: var(--main-color);
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; /* Menurunkan posisi tabel */
}

.styled-table th, .styled-table td {
    border: 1px solid #ddd;
    padding: 8px;
    background: #000;
    /* color: var( --second-bg-color); */
}

.styled-table th {
    background-color: #FF2400;
    text-align: left;
}
span{
    color: var(--main-color);
}


/* Mengatur ukuran gambar */
/* img {
    width: 1500px; /* Ubah sesuai kebutuhan */
    /* height: 600px; Biarkan tinggi otomatis menyesuaikan proporsi gambar */ */
  
</style>
</head>
<body>
  <div class="container">
    <div class="overlay">
      <h1>Selamat Datang!</h1>
    </div>
  </div>

</style>
<body>
    <header>
        <div class="container">
        <div class="logo">Sudana<span>Flix</span></div>
            <nav>
                <ul>
                    <li><a href="index.php"class="a-btn">kembali</a></li>
                </ul>
            </nav>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <i class="fas fa-search" id="searchIcon"></i>
            </div>
        </div>
    </header>
    <br>
    <br>
    <a href="mylist-tambah.php"class="a-btn">Create</a>
    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_FILM'])): ?>
    <p><?= $_SESSION['BERHASIL_TAMBAH_FILM'] ?></P>
    <?php session_unset(); ?>
    <?php endif; ?>
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Genre</th>
                <th>Tahun Rilis</th>
                <th>Keterangan</th>
            </tr>
        </thead>
       <tbody>
       <?php
            $no_urut = 0;
            ?>
            
        <?php foreach ($p as $k => $v) :  $no_urut++;?>
            <tr>
                <td><?= $no_urut ?></td>
                <td><?= $v['nama_film'] ?></td>
                <td><?= $v['genre'] ?></td>
                <td><?= $v['tahun_rilis'] ?></td>
                <td>
                    <a href="<?= "/mylist-detail.php?id={$v['id']}" ?>"class="btn btn-primary">show</a>
                    <a href="<?= "/mylist-hapus.php?id={$v['id']}" ?>"class="btn btn-danger">Delete</a>
                    <a href="<?= "/mylist-edit.php?id={$v['id']}" ?>"class="btn btn-success">update</a>
            </tr>
        <?php endforeach; ?>
        <tbody>
        
        </tbody>
    </table>
<?php
    mysqli_close($conn);
?>


   
