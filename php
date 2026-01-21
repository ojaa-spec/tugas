<?php
$nama  = $_POST['nama'];
$nisn  = $_POST['nisn'];
$bindo = $_POST['bindo'];
$bing  = $_POST['bing'];
$math  = $_POST['math'];
$ipas  = $_POST['ipas'];
$dk  = $_POST['dk'];

$rata = ($bindo + $bing + $math + $ipas + $dk) / 5;

if ($rata >= 75) {
    $status = "LULUS";
    $alasan = "Syarat kelulusan terpenuhi";
} else {
    $status = "TIDAK LULUS";
    $alasan = "Belum memenuhi syarat";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Kelulusan</title>
<style>
body{
    margin:0;
    font-family:Arial;
    background:#1abc9c;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}
.card{
    width:420px;
    background:rgba(0,0,0,0.25);
    padding:20px;
    border-radius:18px;
    color:white;
}
h2{
    text-align:center;
}
table{
    width:100%;
}
td{
    padding:6px;
    border-bottom:1px solid rgba(255,255,255,0.3);
}
.center{
    text-align:center;
    margin-top:10px;
    font-weight:bold;
}
</style>
</head>
<body>

<div class="card">
<h2>HASIL KELULUSAN</h2>

<table>
<tr><td>NAMA</td><td><?= $nama ?></td></tr>
<tr><td>NISN</td><td><?= $nisn ?></td></tr>
<tr><td>BAHASA INDONESIA</td><td><?= $bindo ?></td></tr>
<tr><td>BAHASA INGGRIS</td><td><?= $bing ?></td></tr>
<tr><td>MATEMATIKA</td><td><?= $math ?></td></tr>
<tr><td>IPAS</td><td><?= $ipas ?></td></tr>
<tr><td>DASAR KOMPUTER</td><td><?= $dk ?></td></tr>
</table>

<div class="center">STATUS : <?= $status ?></div>
<div class="center">RATA-RATA : <?= number_format($rata,0) ?></div>
<div class="center">ALASAN : <?= $alasan ?></div>
</div>

</body>
</html>
