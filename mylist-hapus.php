<?php
require_once "app.php";

$id = $_GET["id"];
$sql = "DELETE FROM `film` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
            alert('Berhasil menghapus data');
            document.location.href = 'mylist.php';
        </script>";
} else {
    echo "Failed: " . mysqli_error($conn);
}