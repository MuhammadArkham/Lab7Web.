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