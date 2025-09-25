<?php

// 1. Commit 1 - Setup awal

// Buat file PHP baru (sudah dilakukan dengan kode ini)

// Tambahkan array $nama_barang dan $harga_barang
$nama_barang = [
    "Chikuro",
    "Corndog",
    "Basreng",
    "Mochi",
    "Creppes",
];

$harga_barang = [
    50000,
    4500,
    20000,
    15000,
    12000,
];

// Cetak header sederhana --POLGAN MART--
echo "<h1>--POLGAN MART--</h1>";

// 2. Commit 2 - Logika pembelian

// Tambahkan array $beli, $jumlah, $total, $grandtotal
$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

// Tambahkan perulangan for untuk memilih barang & jumlah random
$jumlah_pembelian = rand(2, 5); // Memilih 2-5 item secara acak
for ($i = 0; $i < $jumlah_pembelian; $i++) {
    $item_index = rand(0, count($nama_barang) - 1);
    $item_jumlah = rand(1, 3);
    $beli[] = $nama_barang[$item_index];
    $jumlah[] = $item_jumlah;
}

// 3. Commit 3 - Perhitungan total

echo "<h3>Detail Pembelian</h3>";

// Tambahkan foreach untuk menampilkan detail pembelian
for ($i = 0; $i < count($beli); $i++) {
    $nama = $beli[$i];
    $kuantitas = $jumlah[$i];
    $indeks_harga = array_search($nama, $nama_barang);
    $harga = $harga_barang[$indeks_harga];

    // Hitung total per item dan akumulasi ke $grandtotal
    $total_item = $harga * $kuantitas;
    $total[] = $total_item;
    $grandtotal += $total_item;
    
    echo "Nama Barang :$nama <br>";
    echo "Harga Barang: Rp. " . $harga . "<br>";
    echo "Jumlah Beli: $kuantitas <br>";
    echo "Total Harga :" . $total_item . "<br>";
}

// 4. Commit 4 - Output akhir

// Tambahkan garis pemisah
echo "<hr>";

// Cetak Total Belanja
echo "<h3>Total Belanja</h3>";
echo "<p>Rp. " . number_format($grandtotal, 0, ',', '.') . "</p>";

// Rapikan tampilan output (sudah dilakukan dengan tag HTML)

?>