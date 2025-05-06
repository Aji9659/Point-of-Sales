<?php

include '../config/conn.php';

$menu = "SELECT * FROM laporan_bulanan";
$query = mysqli_query($conn, $menu);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body onload="window.print()">
    <h1>Laporan Bulanan</h1>
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
                    <td><?= $row['bulan_penjualan'] ?></td>
                    <td><?= $row['nama_kasir'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    $list_total = "SELECT SUM(total_penjualan) AS total FROM laporan_bulanan";
    $kirim_total = mysqli_query($conn, $list_total);
    $result_total = mysqli_fetch_assoc($kirim_total);

    $menu = "SELECT * FROM laporan_bulanan";
    $query = mysqli_query($conn, $menu);
    $row = mysqli_fetch_assoc($query);
    ?>
    <h1>Total: <?= $result_total['total'] ?></h1>
</body>

</html>