<?php
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];

$indo = $_POST['indo'];
$inggris = $_POST['inggris'];
$mtk = $_POST['mtk'];
$ipas = $_POST['ipas'];
$daskom = $_POST['daskom'];

$total = $indo + $inggris + $mtk + $ipas + $daskom;
$rata = $total / 5;

$kkm = 75;
$keterangan = ($rata >= $kkm) ? "LULUS" : "TIDAK LULUS";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai Siswa</title>
</head>
<body>

<h2>Hasil Perhitungan Nilai</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <td>Nama Siswa</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td><?php echo $nisn; ?></td>
    </tr>
    <tr>
        <td>Total Nilai</td>
        <td><?php echo $total; ?></td>
    </tr>
    <tr>
        <td>Rata-rata</td>
        <td><?php echo $rata; ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td><b><?php echo $keterangan; ?></b></td>
    </tr>
</table>

<br>
<a href="form_nilai.html">Kembali ke Form</a>

</body>
</html>
