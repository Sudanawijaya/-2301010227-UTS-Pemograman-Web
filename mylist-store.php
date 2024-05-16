<?php
require_once"app.php";
$n = filmBaru($conn, $_POST);
session_start();
//simpan $_POST ke database

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_FILM'] = 'Gagal menambah data';
} else $_SESSION['BERHASIL_TAMBAH_FILM'] = 
"Berhasil menambah data Film: {$_POST['nama_film']}, Genre: {$_POST['genre']}, Tahun Rilis: {$_POST['tahun_rilis']} ";
header("location: /mylist.php");
die();