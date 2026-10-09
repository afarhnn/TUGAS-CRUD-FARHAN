<?php
include "koneksi.php";

$nidn = $_GET['nidn'];
$query = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn='$nidn'");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $nama      = $_POST['nama'];
    $jabatan   = $_POST['jabatan'];
    $kepakaran = $_POST['kepakaran'];

    $sql = "UPDATE dosen SET
                nama='$nama',
                jabatan='$jabatan',
                kepakaran='$kepakaran'
            WHERE nidn='$nidn'";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen Pembimbing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Form Edit Dosen</h1>
    <p>Ubah data dosen pembimbing di bawah ini.</p>

    <div class="kotak-form">
        <form method="POST">
            <label>NIDN (tidak bisa diubah):</label><br>
            <input type="text" value="<?php echo $data['nidn']; ?>" readonly><br>

            <label>Nama Lengkap:</label><br>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>

            <label>Jabatan Fungsional:</label><br>
            <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" required><br>

            <label>Kepakaran Riset:</label><br>
            <input type="text" name="kepakaran" value="<?php echo $data['kepakaran']; ?>" required><br>

            <button type="submit" name="update">Update Data</button>
        </form>

        <a href="index.php" class="tombol-kembali">Kembali ke Daftar Dosen</a>
    </div>

</body>
</html>
