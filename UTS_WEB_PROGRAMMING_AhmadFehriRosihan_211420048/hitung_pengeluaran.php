<?php

// menangkap nilai dari form input merk HP
$jumlah_hp = $_POST['jumlah_hp'];
$merk_hp = $_POST['merk_hp'];

// inisialisasi variabel total pengeluaran
$total_pengeluaran = 0;

// perulangan untuk menambahkan harga dari setiap HP ke variabel total pengeluaran
for ($i = 0; $i < $jumlah_hp; $i++) {
    $total_pengeluaran += $merk_hp[$i];
}

// menampilkan total pengeluaran
echo "Total pengeluaran Yanti untuk membeli HP adalah Rp." . $total_pengeluaran;

?>
