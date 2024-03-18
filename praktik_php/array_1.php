<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $listDosen = ['Elok Nur Hamdana', 'Unggul Pamenang', 'Bagas Nugraha'];

            echo $listDosen[2] . "<br>";
            echo $listDosen[0] . "<br>";
            echo $listDosen[1] . "<br><br>";

            echo "menampilkan array menggunakan perulangan <br>";
            for ($i = 0; $i < 3; $i++) {
                echo "Indeks ke-$i adalah dosen: " . $listDosen[$i] . "<br>";
            }
        ?>
    </body>
</html>