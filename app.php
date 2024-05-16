<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudanafilm";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Gagal konek ke database : ". mysqli_connect_error());
}

function getAllData($conn) 
{
    $sql = "SELECT * FROM film";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    //mysqi_close($conn);

    return $data;
}
function findfilmByID($conn, $id)
{
    $sql = "SELECT * FROM film WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while ($row =mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}
function filmbaru($conn, $data)
{
     $sql = "INSERT INTO film
     (nama_film, genre, tahun_rilis, created_at, updated_at) 
     VALUES(
        '{$data['nama_film']}',
        '{$data['genre']}',
        '{$data['tahun_rilis']}',
        NOW(),
        NOW()
        );";


    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

  return null;
}
        




// echo"<pre>";
// echo var_dump($p);
// echo "</pre>";
// mysqli_close($conn);