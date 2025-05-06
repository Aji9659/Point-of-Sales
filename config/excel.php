<?php 
include 'conn.php';


header('Content-Type: text/csv');
header('Content-Disposition: attachment;Filename="laporan_harian.csv"');

$queryexcel = mysqli_query($conn, "SELECT * FROM laporan_harian");

$fp = fopen('PHP://output','w');
fputcsv($fp, array("ID Laporan","Total Penjualan", "Tanggal Penjualan", "Nama Kasir"), ';');
while ($kolom = mysqli_fetch_assoc($queryexcel)) {
    fputcsv($fp, array($kolom['id_laporan_harian'],$kolom['total_penjualan'],$kolom['tanggal_penjualan'],$kolom['nama_kasir']), ';');
}
fclose($fp);

?>
