<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$diskon = 0.2;

if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * $diskon;
} else {
    $diskon = 0;
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga Produk: Rp $hargaProduk <br>";
echo "Diskon 10%: Rp $diskon<br>";
echo "Harga Setelah Diskon: Rp $hargaSetelahDiskon";

?>
