<?php 
require_once "app.php";

// Mendapatkan ID dari URL
$id = $_GET["id"];

// Mendapatkan data film berdasarkan ID
$d = findfilmByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <style>
       
        :root {
            --text-color: #fff;
            --bg-color: #ff2400;
            --second-bg-color: #000;
            --main-color: #fff;
            --other-color: #c3cad5;

            --h1-font: 4.5rem;
            --h2-font: 2.9rem;
            --p-font: 1rem;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #fff;
        }   
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }
        .content {
            padding: 20px;
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
        span {
            color: var(--main-color);
        }
        .a-btn {
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
        .a-btn:hover {
            background: var(--main-color);
            color: var(--bg-color);
            box-shadow: 0 0 20px var(--main-color);
            transform: scale(1.1);
        }
        .detail {
            font-size: 1.5rem;
        }
        .styled-table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        .styled-table th, .styled-table td {
            border: 1px solid #ddd;
            padding: 8px;
            background: #000;
        }
        .styled-table th {
            background-color: #FF2400;
            text-align: center;
        }
        .styled-table td {
            text-align: center;
        }      
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">Sudana<span>Flix</span></div>
        <nav>
            <ul>
                <li><a href="mylist.php" class="a-btn">Kembali</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search...">
            <i class="fas fa-search" id="searchIcon"></i>
        </div>
    </div>
</header>

<div class="content">
    <br>
    <br>
    <br>
    <br>
    <h1>Riwayat Film Detail</h1>
    <br>
    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Genre</th>
                <th>Tahun Rilis</th>
                <th>Kapan Di buat</th>
                <th>Kapan Di ubah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $d['nama_film'] ?></td>
                <td><?= $d['genre'] ?></td>
                <td><?= $d['tahun_rilis'] ?></td>
                <td><?= $d['created_at'] ?></td>
                <td><?= $d['updated_at'] ?></td>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

<?php
mysqli_close($conn);
?>
