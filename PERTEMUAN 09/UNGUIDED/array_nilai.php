<?php
$nilai = [75, 89, 65, 90, 85, 70, 98, 65, 69, 70, 12];

// Nilai tertinggi & terendah
$max = max($nilai);
$min = min($nilai);

// Rata-rata
$rata = array_sum($nilai) / count($nilai);

// Jumlah lulus (>=70)
$lulus = 0;
foreach ($nilai as $n) {
    if ($n >= 70) {
        $lulus++;
    }
}

// Urutkan dari tertinggi ke terendah
rsort($nilai);

echo "Nilai Tertinggi : $max <br>";
echo "Nilai Terendah : $min <br>";
echo "Rata-rata Nilai : " . number_format($rata, 2) . "<br>";
echo "Jumlah Mahasiswa Lulus : $lulus <br><br>";

echo "Nilai setelah diurutkan (Tertinggi ke Terendah):<br>";
foreach ($nilai as $n) {
    echo $n . " ";
}
?>
