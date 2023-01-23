<?php
$nama = $_POST['nama'];
$jkelamin = $_POST['jkelamin'];
$gaji_pokok = $_POST['gaji_pokok'];
$status_menikah = $_POST['status_menikah'];
$status_karyawan = $_POST['status_karyawan'];

if ($status_menikah == "true") {
    $tunjangan_menikah = $gaji_pokok * 0.1;
} else {
    $tunjangan_menikah = 0;
}

if ($status_karyawan == "tetap") {
    $tunjangan_karyawan = $gaji_pokok * 0.02;
} else {
    $tunjangan_karyawan = $gaji_pokok * 0.01;
}

$gaji_bersih = $gaji_pokok + $tunjangan_menikah + $tunjangan_karyawan;


echo "Nama Karyawan: " . $nama; 
echo "<br>jenis kelamin: Rp." . $jkelamin; 
echo "<br>gaji_pokok: Rp." . $gaji_pokok; 
echo "<br>status menikah: Rp." . $status_menikah; 
echo "<br>status karyawan: Rp." . $status_karyawan; 
echo "<br>==================";
echo "<br>Gaji Bersih: Rp." . $gaji_bersih;
