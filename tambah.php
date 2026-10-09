<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nidn      = $_POST['nidn'];
    $nama      = $_POST['nama'];
    $jabatan   = $_POST['jabatan'];
    $kepakaran = $_POST['kepakaran'];

    $sql = "INSERT INTO dosen (nidn, nama, jabatan, kepakaran)
            VALUES ('$nidn', '$nama', '$jabatan', '$kepakaran')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen Pembimbing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Form Tambah Dosen</h1>
    <p>Silakan masukkan data dosen pembimbing yang baru.</p>

    <div class="kotak-form">
        <form method="POST">
            <label>NIDN:</label><br>
            <input type="text" name="nidn" required><br>

            <label>Nama Lengkap:</label><br>
            <input type="text" name="nama" required><br>

            <label>Jabatan Fungsional:</label><br>
            <input type="text" name="jabatan" required><br>

            <label>Kepakaran Riset:</label><br>
            <input type="text" name="kepakaran" required><br>

            <button type="submit" name="simpan">Simpan Data</button>
        </form>

        <a href="index.php" class="tombol-kembali">Kembali ke Daftar Dosen</a>
    </div>

</body>
</html>
