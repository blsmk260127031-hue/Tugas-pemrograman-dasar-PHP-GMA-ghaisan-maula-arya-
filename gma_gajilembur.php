<?php

function rupiah($angka)
{
    return "Rp " . number_format($angka, 0, ",", ".");
}

function gajiHarian($golongan)
{
    if ($golongan == "A") {
        return 200000;
    } elseif ($golongan == "B") {
        return 150000;
    } elseif ($golongan == "C") {
        return 100000;
    } else {
        return 0;
    }
}

function uangLemburHarian($golongan)
{
    if ($golongan == "A") {
        return 75000;
    } elseif ($golongan == "B") {
        return 50000;
    } elseif ($golongan == "C") {
        return 30000;
    } else {
        return 0;
    }
}

$nama = "Budi";
$golongan = "B";
$jumlahHari = 6;

$gaji = gajiHarian($golongan);
$lembur = uangLemburHarian($golongan);

if ($gaji == 0) {
    echo "Golongan tidak valid.";
    exit;
}

echo "<h3>Rincian Gaji dan Lembur</h3>";
echo "Nama karyawan  : $nama<br>";
echo "Golongan       : $golongan<br>";
echo "Gaji per hari  : " . rupiah($gaji) . "<br>";
echo "Lembur per hari: " . rupiah($lembur) . "<br>";
echo "Hari kerja     : $jumlahHari hari<br><br>";

$totalGaji = 0;
$totalLembur = 0;


for ($hari = 1; $hari <= $jumlahHari; $hari++) {
    $totalGaji += $gaji;
    $totalLembur += $lembur;
    echo "Hari ke-$hari : Gaji " . rupiah($totalGaji) . " | Lembur " . rupiah($totalLembur) . "<br>";
}

$totalDiterima = $totalGaji + $totalLembur;

echo "<br>Total gaji   : " . rupiah($totalGaji) . "<br>";
echo "Total lembur : " . rupiah($totalLembur) . "<br>";
echo "<b>Total diterima: " . rupiah($totalDiterima) . "</b>";
?>
