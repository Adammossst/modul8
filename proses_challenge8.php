<?php
// Validasi email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid.<br>";
    echo '<a href="form_challenge8.html">Kembali</a>';
    exit();
}

// Validasi jumlah produk
$jumlah = $_POST['jumlah'];
if ($jumlah <= 0) {
    echo "Jumlah produk harus lebih dari 0.<br>";
    echo '<a href="form_challenge8.html">Kembali</a>';
    exit();
}

// Simpan data dalam file teks pesanan.txt
$file = fopen("pesanan.txt", "a");
$data = "Nama: " . $_POST['nama'] . "\n";
$data .= "Email: " . $_POST['email'] . "\n";
$data .= "Alamat Pengiriman: " . $_POST['alamat'] . "\n";
$data .= "Produk yang dipesan: " . $_POST['produk'] . "\n";
$data .= "Jumlah Produk: " . $_POST['jumlah'] . "\n\n";
fwrite($file, $data);
fclose($file);

echo "Pesanan Anda berhasil disimpan.";
?>