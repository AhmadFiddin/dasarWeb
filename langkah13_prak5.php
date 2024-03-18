<?php
$nilaiSiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

echo "Daftar nilai siswa:<br>";

foreach ($nilaiSiswa as $nama => $nilai) {
    echo "$nama : $nilai<br>";
}

$rataRataKelas = array_sum($nilaiSiswa) / count($nilaiSiswa);
echo "Nilai rata-rata kelas: $rataRataKelas <br>";

echo "Daftar nilai siswa di atas rata-rata kelas:<br>";
foreach ($nilaiSiswa as $nama => $nilai) {
    $diatasRataRata = ($nilai > $rataRataKelas) ? 'YA' : 'TIDAK';

    if ($diatasRataRata == 'YA') {
        echo "$nama : $nilai<br>";
    }
}
?>
