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

