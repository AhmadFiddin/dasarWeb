<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi : $totalKursi <br><br>";
echo "Jumlah kursi terpakai : $kursiTerisi <br><br>";
echo "Jumlah kursi yang masih kosong: $kursiKosong <br><br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKosong, 2) . "%<br>";
?>
