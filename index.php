<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen Pembimbing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Dosen Pembimbing</h1>
    <p>Sistem Informasi Tugas Akhir dan Skripsi - Modul B</p>

    <table>
        <tr>
            <th>NIDN</th>
            <th>Nama Lengkap</th>
            <th>Jabatan Fungsional</th>
            <th>Kepakaran Riset</th>
            <th>Aksi</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM dosen");

        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['nidn']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jabatan']; ?></td>
            <td><?php echo $data['kepakaran']; ?></td>
            <td>
                <a class="aksi-edit" href="edit.php?nidn=<?php echo $data['nidn']; ?>">Edit</a> |
                <a class="aksi-hapus" href="hapus.php?nidn=<?php echo $data['nidn']; ?>"
                   onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="tambah.php" class="tombol">Tambah Data Dosen</a>

</body>
</html>
