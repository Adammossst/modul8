<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];

    switch ($operasi) {
        case "tambah":
            $hasil = $angka1 + $angka2;
            break;
        case "kurang":
            $hasil = $angka1 - $angka2;
            break;
        case "kali":
            $hasil = $angka1 * $angka2;
            break;
        case "bagi":
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = "Tidak dapat melakukan pembagian dengan nol.";
            }
            break;
        default:
            $hasil = "Operasi tidak valid.";
        
    }
    // Menampilkan hasil kepada pengguna
    echo "Hasil: " . $hasil;
}
?>