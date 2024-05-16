<?php
require_once "app.php";

$id = $_GET["id"];
$sql = "DELETE FROM `film` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: mylist.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}