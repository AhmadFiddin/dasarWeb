<?php
function hitungSkor($poin) {
    $hadiah = ($poin > 500) ? "YA" : "TIDAK";

    echo "Total skor pemain adalah: $poin<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
}

hitungSkor(600);
?>