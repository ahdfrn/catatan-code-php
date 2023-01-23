<?php
$kota = $_POST['kota'];
$biaya_tol = $_POST['biaya_tol'];
$biaya_hotel = $_POST['biaya_hotel'];
$biaya_tempat_wisata = $_POST['biaya_tempat_wisata'];

$pengeluaran = $biaya_tol + $biaya_hotel + $biaya_tempat_wisata;

// Menggunakan For
echo"menggunakan for<br>";
for ($i = 0; $i < count($kota); $i++) {
    echo "Pengeluaran di kota " . $kota[$i] . " sebesar Rp." . $pengeluaran . "<br>";
}

echo "Total Pengeluaran Selama Liburan: Rp." . (count($kota) * $pengeluaran) . "<br>";
echo "=====================================";

// Menggunakan While
echo"<br>menggunakan while";
$i = 0;
while ($i < count($kota)) {
    echo "<br>Pengeluaran di kota " . $kota[$i] . " sebesar Rp." . $pengeluaran . "<br>";
    $i++;
}

echo "Total Pengeluaran Selama Liburan: Rp." . (count($kota) * $pengeluaran);
