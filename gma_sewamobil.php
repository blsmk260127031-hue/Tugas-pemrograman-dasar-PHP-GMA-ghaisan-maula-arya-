<?php

function tarifHarian($jenis)
{
    if ($jenis == "Sedan") {
        return 300000;
    } elseif ($jenis == "SUV") {
        return 500000;
    } else {
        return 0; 
    }
}


function rupiah($angka)
{
    return "Rp " . number_format($angka, 0, ",", ".");
}


$jenisKendaraan = "SUV"; 
$lamaSewa = 5;           

$tarif = tarifHarian($jenisKendaraan);

if ($tarif == 0) {
    echo "Jenis kendaraan tidak tersedia.";
    exit;
}

echo "<h3>Rincian Biaya Sewa Mobil</h3>";
echo "Jenis kendaraan : $jenisKendaraan<br>";
echo "Tarif per hari  : " . rupiah($tarif) . "<br>";
echo "Lama sewa       : $lamaSewa hari<br><br>";


$total = 0;
for ($hari = 1; $hari <= $lamaSewa; $hari++) {
    $total += $tarif;
    echo "Hari ke-$hari : " . rupiah($tarif) . " (subtotal: " . rupiah($total) . ")<br>";
}

$diskon = 0;
if ($lamaSewa > 3) {
    $diskon = $total * 0.10;
}

$totalBayar = $total - $diskon;

echo "<br>Total sebelum diskon : " . rupiah($total) . "<br>";
echo "Diskon (10%)            : " . rupiah($diskon) . "<br>";
echo "<b>Total pembayaran       : " . rupiah($totalBayar) . "</b>";
?>
