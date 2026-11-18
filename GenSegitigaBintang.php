<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Variasi Segitiga Bintang</title>
</head>

<body>

    <h2>Generator Segitiga Bintang</h2>

    <form method="POST" action="">
        <label for="tinggi">Tinggi Segitiga (1 - 20):</label><br>
        <input type="number" id="tinggi" name="tinggi" required min="1" max="20"><br><br>

        <label for="arah">Arah Puncak Segitiga:</label><br>
        <select id="arah" name="arah">
            <option value="atas">Ke Atas</option>
            <option value="bawah">Ke Bawah</option>
            <option value="kiri">Ke Kiri</option>
            <option value="kanan">Ke Kanan</option>
        </select><br><br>

        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $arah = $_POST['arah'];

        if (filter_var($tinggi, FILTER_VALIDATE_INT) && $tinggi >= 1 && $tinggi <= 20) {

            echo "<h3>Hasil Segitiga (Arah: " . ucfirst($arah) . ", Tinggi: $tinggi)</h3>";
            echo "<pre>";
    
            switch ($arah) {
                case 'atas':
                    for ($i = 1; $i <= $tinggi; $i++) {
                        for ($s = 1; $s <= ($tinggi - $i); $s++) {
                            echo " ";
                        }
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    break;

                case 'bawah':
                    for ($i = $tinggi; $i >= 1; $i--) {
                        for ($s = 1; $s <= ($tinggi - $i); $s++) {
                            echo " ";
                        }
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    break;

                case 'kiri':
                    for ($i = 1; $i <= $tinggi; $i++) {
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    for ($i = $tinggi - 1; $i >= 1; $i--) {
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    break;

                case 'kanan':
                    $lebar_maks = $tinggi * 2;
                    for ($i = 1; $i <= $tinggi; $i++) {
                        $spasi = ($tinggi - $i) * 2;
                        for ($s = 1; $s <= $spasi; $s++) {
                            echo " ";
                        }
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    for ($i = $tinggi - 1; $i >= 1; $i--) {
                        $spasi = ($tinggi - $i) * 2;
                        for ($s = 1; $s <= $spasi; $s++) {
                            echo " ";
                        }
                        for ($b = 1; $b <= $i; $b++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                    break;
            }

            echo "</pre>";

        } else {
            echo "<p style='color: red;'>Masukan tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</p>";
        }
    }
    ?>

</body>

</html>