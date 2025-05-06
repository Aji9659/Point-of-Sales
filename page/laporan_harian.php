<?php

include '../config/conn.php';

$menu = "SELECT * FROM laporan_harian";
$query = mysqli_query($conn, $menu)

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Harian</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body>
    <div class="container">
        <!-- All your existing content -->

        <h1>Laporan Harian</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Total penjualan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Kasir</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                while ($row = mysqli_fetch_assoc($query)) { ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['total_penjualan'] ?></td>
                        <td><?= $row['tanggal_penjualan'] ?></td>
                        <td><?= $row['nama_kasir'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        $list_total = "SELECT SUM(total_penjualan) AS total FROM laporan_harian";
        $kirim_total = mysqli_query($conn, $list_total);
        $result_total = mysqli_fetch_assoc($kirim_total);

        $menu = "SELECT * FROM laporan_harian";
        $query = mysqli_query($conn, $menu);
        $row = mysqli_fetch_assoc($query);

        if (isset($_POST['laporan_bulanan'])) {
            $keranjang = "INSERT INTO laporan_bulanan (total_penjualan, nama_kasir) VALUES ('$result_total[total]', '$row[nama_kasir]')";
            $list = mysqli_query($conn, $keranjang);
        }
        ?>
        <h1>Total: <?= $result_total['total'] ?></h1>

        <form method="post">
            <button name="laporan_bulanan">Laporan Bulanan</button>
        </form>
        <div class="nav-links">
            <a href="./laporan_bulanan.php">laporan bulanan</a>
            <a href="./print_harian.php">print</a>
        </div>
    </div>

</body>

</html>