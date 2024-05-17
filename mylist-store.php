<?php
require_once"app.php";
session_start();
$n = filmbaru($conn, $_POST);

//simpan $_POST ke database

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_FILM'] = "
    <script>
        alert('Berhasil meambahkan data');
        document.location.href = 'mylist.php';
    </script>";
} else { 
    $_SESSION['BERHASIL_TAMBAH_FILM'] = "
    <script>
        alert('Berhasil meambahkan data');
        document.location.href = 'mylist.php';
    </script>";
}
header("location: /mylist.php");
die();