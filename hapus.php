<?php
include "koneksi.php";

$nidn = $_GET['nidn'];

mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn='$nidn'");

header("Location: index.php");
exit;
?>
