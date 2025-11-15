Nama : Muhammad Arkhamullah Rifai Asshidiq

Nim : 312410545

Kelas : TI.24.A.5
## Laporan Praktikum

## 1. Install XAMPP

Unduh XAMPP melalui situs resmi:
https://www.apachefriends.org/download.html

Pilih versi portable agar proses instalasi lebih mudah.

Extract file XAMPP dan tempatkan pada direktori misalnya:
C:\xampp

2. Konfigurasi Web Server
a. Konfigurasi Apache (HTTP Server)

File konfigurasi:
xampp\apache\conf\httpd.conf

Bagian yang dapat dikonfigurasi:

Port HTTP (default 80)

Modul Apache yang aktif

Lokasi DocumentRoot

Pengaturan keamanan dasar

b. Konfigurasi PHP

File konfigurasi:
xampp\php\php.ini

Digunakan untuk mengatur:

Maksimal waktu eksekusi script (max_execution_time)

Batas upload file (upload_max_filesize)

Error reporting

Pengaturan ekstensi PHP

c. Konfigurasi MySQL

File konfigurasi:
xampp\mysql\bin\my.ini

Pengaturan meliputi:

Username dan password admin

Port MySQL (default 3306)

Timezone database

3. Menjalankan Web Server

![Foto](https://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160354.png?raw=true)
Jalankan XAMPP Control Panel, lalu tekan:

Start Apache

Start MySQL

Uji server apakah sudah berjalan melalui browser:
![Foto](https://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160447.png?raw=true)
http://127.0.0.1
atau
http://localhost


Direktori untuk menyimpan file website:


C:\xampp\htdocs\
![Foto](https://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160508.png?raw=true)

Akses PHPMyAdmin:

http://localhost/phpmyadmin

4. Memulai PHP

Buat folder baru:

C:\xampp\htdocs\lab7_php_dasar


Lalu akses melalui browser:

http://localhost/lab7_php_dasar/

5. PHP Dasar

Buat file php_dasar.php, isi dengan:
```
<!DOCTYPE html>
<html>
<head>
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php echo "Hello World"; ?>
</body>
</html>
```

Akses file:

http://localhost/lab7_php_dasar/php_dasar.php

6. Variabel pada PHP
```
<?php
$nim = "0411500400";
$nama = "Abdullah";

echo "NIM : $nim <br>";
echo "Nama : $nama";
?>

7. Predefine Variable $_GET
<?php
echo "Selamat Datang " . $_GET['nama'];
?>
```

Akses:

http://localhost/lab7_php_dasar/latihan2.php?nama=Bagus

8. Form Input
```
<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

<?php
echo "Selamat Datang " . $_POST['nama'];
?>

9. Operator
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji setelah pajak = Rp. $thp";
?>
```
10. Kondisi IF
```
<?php
$hari = date("l");

if ($hari == "Sunday") {
    echo "Minggu";
} elseif ($hari == "Monday") {
    echo "Senin";
} else {
    echo "Hari Lain";
}
?>

11. Kondisi Switch
<?php
$hari = date("l");

switch ($hari) {
    case "Sunday": echo "Minggu"; break;
    case "Monday": echo "Senin"; break;
    case "Tuesday": echo "Selasa"; break;
    default: echo "Hari Lain";
}
?>

12. Perulangan FOR
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke-$i <br>";
}

13. Perulangan WHILE
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke-$i <br>";
    $i++;
}

14. Perulangan DO WHILE
$i = 1;
do {
    echo "Perulangan ke-$i <br>";
    $i++;
} while ($i <= 10);
```
## ## Pertanyaan dan Tugas

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

## Jawaban

- Ini adalah program PHP sederhana yang saya buat:

Program PHP:
```
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program PHP Sederhana</title>
</head>
<body>

<h2>Program PHP: Hitung Umur dan Gaji</h2>

<form method="post">
    Nama: <br>
    <input type="text" name="nama" required><br><br>

    Tanggal Lahir: <br>
    <input type="date" name="tgl_lahir" required><br><br>

    Pekerjaan: <br>
    <select name="pekerjaan" required>
        <option value="">-- Pilih --</option>
        <option value="Programmer">Programmer</option>
        <option value="Designer">Designer</option>
        <option value="Manager">Manager</option>
        <option value="Freelancer">Freelancer</option>
    </select>
    <br><br>

    <button type="submit" name="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung umur
    $lahir = new DateTime($tgl);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($lahir)->y;

    // Tentukan gaji
    switch ($pekerjaan) {
        case "Programmer": $gaji = 8000000; break;
        case "Designer": $gaji = 6000000; break;
        case "Manager": $gaji = 10000000; break;
        case "Freelancer": $gaji = 4000000; break;
    }

    echo "<h3>Hasil Output</h3>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: " . date("d-m-Y", strtotime($tgl)) . "<br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
}
?>

</body>
</html>
```

