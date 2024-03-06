<?php
/*
* http://tutorcollection.com
* config.php
*/
include_once('config.php');

$conn = mysqli_connect($server, $user, $password);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db_selected = mysqli_select_db($conn, $db);
if (!$db_selected) {
    die("Pemilihan database gagal: " . mysqli_error($conn));
}
?>
