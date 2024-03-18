<?php
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
echo "Daftar nilai Siswa: " . implode(", ", $nilaiSiswa) . "<br>";

sort($nilaiSiswa);
echo "Daftar nilai Siswa setelah urut: " . implode(", ", $nilaiSiswa) . "<br>";

$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);
$totalNilai = array_sum($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar nilai Siswa setelah penghilangan: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . $rataRata;
?>
