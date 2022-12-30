<?php
include("koneksi.php");
$search = $_GET["q"] ?? null;
$concat = $search ? " WHERE title LIKE '%$search%' OR body LIKE '%$search%'" : "";
$result = mysqli_query($conn, "SELECT * FROM galeri" . $concat);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json = json_encode($rows);

echo $json;