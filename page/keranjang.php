<?php

include '../config/conn.php';

$keranjang_tampilan = "SELECT * FROM penjualan";
$list_tampil = mysqli_query($conn, $keranjang_tampilan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body>
    <div class="container">

        <ul>
            <?php while ($row = mysqli_fetch_assoc($list_tampil)) { ?>
                <?php
                $row['id_penjualan'];

                $keranjang = "SELECT * FROM penjualan WHERE id_penjualan = '$row[id_penjualan]'";
                $list = mysqli_query($conn, $keranjang);
                $result = mysqli_fetch_assoc($list);

                $keranjang_produk = "SELECT * FROM produk WHERE id_produk = '$row[id_penjualan]'";
                $list_produk = mysqli_query($conn, $keranjang_produk);
                $result_produk = mysqli_fetch_assoc($list_produk);
                ?>
                <li> <?= $result_produk['nama_produk'] . "  " . $result['total_penjualan']; ?></li>
            <?php } ?>
        </ul>
        <?php
        $list_total = "SELECT SUM(total_penjualan) AS total FROM penjualan";
        $kirim_total = mysqli_query($conn, $list_total);
        $result_total = mysqli_fetch_assoc($kirim_total);

        if (isset($_POST['laporan_harian'])) {
            $keranjang = "INSERT INTO laporan_harian (total_penjualan, nama_kasir) VALUES ('$result_total[total]', '$_POST[nama_kasir]')";
            $list = mysqli_query($conn, $keranjang);
        }
        ?>
        <h1>Total: <?= $result_total['total'] ?></h1>

        <form method="post">
            <input type="text" name="nama_kasir">
            <button name="laporan_harian">Laporan Harian</button>
        </form>
        <div class="nav-links">
            <a href="./laporan_harian.php">laporan harian</a>
            <a href="./struk.php">Struk</a>
        </div>
    </div>
</body>

</html>