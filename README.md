Tugas CRUD - Data Dosen Pembimbing

Ini tugas individu minggu 2 mata kuliah Sistem Informasi Tugas Akhir dan Skripsi (Modul B). Website ini lanjutan dari studi kasus minggu lalu, yang tadinya cuma HTML CSS biasa sekarang saya sambungkan ke database MySQL supaya datanya bisa ditambah, diubah, dan dihapus.

Dibuat dengan PHP, MySQL, dan XAMPP.

Yang bisa dilakukan
Lihat daftar dosen (index.php)
Tambah dosen baru (tambah.php)
Edit data dosen (edit.php)
Hapus data dosen (hapus.php)

Isi file

koneksi.php : buat nyambung ke database
index.php : halaman utama, nampilin data dari tabel
tambah.php : form tambah data
edit.php : form edit data
hapus.php : proses hapus data
style.css : tampilan
database.sql : file buat bikin database dan tabelnya

Cara jalanin

Nyalakan Apache dan MySQL di XAMPP.
Buka phpMyAdmin (localhost/phpmyadmin), masuk ke tab SQL, lalu jalankan isi file database.sql.
Copy folder project ini ke C:\xampp\htdocs\tugas_crud
Buka localhost/tugas_crud/index.php di browser.

Tabel dosen

Database: db_dosen

nidn (primary key)
nama
jabatan
kepakaran

Dibuat oleh

AHMAD FARHAN ASH-SHIDDIEQY NIM 102022500241 SI-49-03