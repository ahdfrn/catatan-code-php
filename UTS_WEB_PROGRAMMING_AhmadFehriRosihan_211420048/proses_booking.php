<?php

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$nginap = $_POST['nginap'];
$jumlah_kamar_biasa = $_POST['jumlah_kamar_biasa'];
$jumlah_kamar_VIP = $_POST['jumlah_kamar_VIP'];

// Set biaya kamar biasa dan VIP
$biaya_kamar_biasa = 350000; // Isi dengan biaya kamar biasa
$biaya_kamar_VIP = 750000; // Isi dengan biaya kamar VIP

// Hitung total biaya kamar biasa
$total_biaya_kamar_biasa = $biaya_kamar_biasa * $jumlah_kamar_biasa;

// Hitung total biaya kamar VIP
$total_biaya_kamar_VIP = $biaya_kamar_VIP * $jumlah_kamar_VIP;

// Hitung total biaya semua kamar
$total_biaya_semua_kamar = $total_biaya_kamar_biasa + $total_biaya_kamar_VIP * $nginap;

// Tampilkan pesan konfirmasi pembookingan

echo "STRUK BOOKING<br>";
echo "=============================================================<br>";
echo "HALO, " . $nama . "! Pembookingan kamar hotel Anda telah kami terima.";
echo "<br>=============================================================";
echo "<br>Total biaya yang harus dibayar adalah: Rp" . $total_biaya_semua_kamar;
echo "<br>Silakan cek email Anda (" . $email . ") untuk informasi lebih lanjut.";
echo "<br>lama menginap anda (" . $nginap . ") hari.";
echo "<br>=============================================================";
echo "<br>TERIMA KASIH !!";


// Tambahkan logika lain sesuai dengan kebutuhan (misalnya, simpan data pembookingan ke database, kirim email konfirmasi, dll.)

?>
