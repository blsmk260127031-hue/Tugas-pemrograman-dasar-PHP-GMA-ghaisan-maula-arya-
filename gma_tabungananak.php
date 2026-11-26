<?php

function rupiah($angka)
{
    return "Rp " . number_format($angka, 0, ",", ".");
}

function hitungBonus($setoran, $batas)
{
    if ($setoran >= $batas) {
        return $setoran * 0.10;
    } else {
        return 0;
    }
}

// ===== Input =====
$saldo = 100000;
$setoranBulanan = 150000;
$batasBonus = 100000;    
$jumlahBulan = 6;         

echo "<h3>Simulasi Tabungan Anak</h3>";
echo "Saldo awal      : " . rupiah($saldo) . "<br>";
echo "Setoran bulanan : " . rupiah($setoranBulanan) . "<br>";
echo "Batas bonus     : " . rupiah($batasBonus) . "<br>";
echo "Lama simulasi   : $jumlahBulan bulan<br><br>";

for ($bulan = 1; $bulan <= $jumlahBulan; $bulan++) {
    $bonus = hitungBonus($setoranBulanan, $batasBonus);
    $saldo = $saldo + $setoranBulanan + $bonus;

    echo "Bulan ke-$bulan : setoran " . rupiah($setoranBulanan)
        . " + bonus " . rupiah($bonus)
        . " = saldo " . rupiah($saldo) . "<br>";
}

echo "<br><b>Saldo akhir setelah $jumlahBulan bulan: " . rupiah($saldo) . "</b>";
?>
