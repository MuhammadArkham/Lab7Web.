Nama : Muhammad Arkhamullah Rifai Asshidiq

Nim : 312410545

Kelas : TI.24.A.5
## Laporan Praktikum

### 1. Install XAMPP 

Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan direktorinya (misal: c:\xampp).

### 2. Konfigurasi web server

- Konfigurasi Apache

Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul yang diaktifkan, lokasi document root, dll. Lokasi file: \xampp\apache\conf\httpd.conf

- Konfigurasi PHP

Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa. Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error reporting, dll. Lokasi file: \xampp\php\php.ini

- Konfigurasi MySql

Konfigurasi server MySQL, seperti administrator user, port, timezone, dll. Lokasi file: \xampp\mysql\bin\my.ini

### 3. Menjalankan Web Server
Untuk menjalankan web server dari menu XAMPP Control.
![Foto](fhttps://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160354.png)

- Uji coba apakah server sudah berkerja dengan baik.

http://127.0.0.1 atau http://localhost
![Foto](https://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160447.png)

- Dokumen Website

Semua file website tempatkan di direktori: \xampp\htdocs\

Manajemen database: http://localhost/phpmyadmin
![Foto](https://github.com/MuhammadArkham/Lab7Web./blob/main/BUKTI%20FOTO/Screenshot%202025-11-15%20160508.png)

### 4. Memulai PHP

Buat folder lab7_php_dasar pada root directory web server (c:\xampp\htdocs)



Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/



### 5. PHP Dasar

Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

Kemudian untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php


### 6. Variable PHP

Menambahkan variable pada program.

```
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```



### 7. Predefine Variable $_GET

```
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

Untuk mengaksesnya gunakan URL: http://localhost/lab7_php_dasar/latihan2.php?nama=Bagus



### 8. Membuat Form Input

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POS['nama'];
?>
</body>
</html>
```

![gambar](foto/07.png)

### 9.  Operator

```
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```


### 10. Kondisi IF

```
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}
?>
```



### 11. Kondisi Switch

```
<?php
$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
}
?>
```



### 12. Perulangan for

```
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}

echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}
?>
```



### 13. Perulangan while

```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}
?>
```



### 14. Perulangan dowhile

```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i<=10);
?>
```


## Pertanyaan dan Tugas

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

## Jawaban

- Ini adalah program PHP sederhana yang saya buat:

```
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program PHP Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 30px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            width: 350px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .output {
            background: #e6ffed;
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h2>Program PHP: Hitung Umur & Gaji</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required>

        <label>Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            <option value="Manager">Manager</option>
            <option value="Freelancer">Freelancer</option>
        </select>
        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $tgl_lahir_obj = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tgl_lahir_obj)->y;

        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Designer":
                $gaji = 6000000;
                break;
            case "Manager":
                $gaji = 10000000;
                break;
            case "Freelancer":
                $gaji = 4000000;
                break;
            default:
                $gaji = 0;
                break;
        }
        echo "<div class='output'>";
        echo "<h3>Hasil Output:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Tanggal Lahir: <b>" . date("d-m-Y", strtotime($tgl_lahir)) . "</b><br>";
        echo "Umur: <b>$umur tahun</b><br>";
        echo "Pekerjaan: <b>$pekerjaan</b><br>";
        echo "Gaji: <b>Rp " . number_format($gaji, 0, ',', '.') . "</b>";
        echo "</div>";
    }
    ?>
</body>
</html>
```

![gambar](foto/003.png)
