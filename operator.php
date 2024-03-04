<?php
$a = 10;
$b= 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Diketahuhi nilai a = 10 ; b = 5 <br><br>";
echo "Berikut adalah hasil dari beberapa Operator Aritmatika di php : <br>";
echo "1. Hasil dari a + b (Penjumlahan) = {$hasilTambah} <br>";
echo "2. Hasil dari a - b (Pengurangan) = {$hasilKurang} <br>";
echo "3. Hasil dari a * b (Perkalian)  = {$hasilKali} <br>";
echo "4. Hasil dari a / b (Pembagian) = {$hasilBagi} <br>";
echo "5. Hasil dari a % b (Sisa bagi) = {$sisaBagi} <br>";
echo "6. Hasil dari a ** b (Pangkat) = {$pangkat} <br><br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasillebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Diketahuhi nilai a = 10 ; b = 5 <br><br>";
echo "Berikut adalah hasil dari beberapa Operator Pembanding di php : <br>";
echo "1. Hasil dari a == b (Identik) : " . ($hasilSama ? 'True/Benar' : 'False/Salah') . "<br>";
echo "2. Hasil dari a != b (Tidak Identik) : " . ($hasilTidakSama ? 'True/Benar' : 'False/Salah') . "<br>";
echo "3. Hasil dari a < b (Lebih kecil dari) : " . ($hasilLebihKecil ? 'True/Benar' : 'False/Salah') . "<br>";
echo "4. Hasil dari a > b (Lebih besar dari) : " . ($hasilLebihBesar ? 'True/Benar' : 'False/Salah') . "<br>";
echo "5. Hasil dari a <= b (Lebih kecil dari atau sama dengan) : " . ($hasillebihKecilSama ? 'True/Benar' : 'False/Salah') . "<br>";
echo "6. Hasil dari a >= b (Lebih besar dari atau sama dengan) : " . ($hasilLebihBesarSama ? 'True/Benar' : 'False/Salah') . "<br><br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Diketahuhi nilai a = 10 ; b = 5 <br><br>";
echo "Berikut adalah hasil dari beberapa Operator Logika di php : <br>";
echo "Hasil AND: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'True' : 'False') . "<br>";


// $a += $b;
// $a -= $b;
// $a *= $b;
// $a /= $b;
// $a %= $b;

// $hasilIdentik = $a === $b;
// $hasilTidakIdentik
?>