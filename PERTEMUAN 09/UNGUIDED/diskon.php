<?php
$total_belanja = 750000;
$diskon = 0;

if ($total_belanja >= 1000000) {
    $diskon = 0.30;
} elseif ($total_belanja >= 500000) {
    $diskon = 0.20;
} elseif ($total_belanja >= 100000) {
    $diskon = 0.10;
}

$nilai_diskon = $total_belanja * $diskon;
$total_bayar = $total_belanja - $nilai_diskon;

echo "Total Belanja : Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
echo "Diskon : Rp " . number_format($nilai_diskon, 0, ',', '.') . "<br>";
echo "Total Bayar : Rp " . number_format($total_bayar, 0, ',', '.');
?>
