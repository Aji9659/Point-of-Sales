<?php

include '../config/conn.php';

$menu = "SELECT * FROM produk";
$query = mysqli_query($conn, $menu)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body>
<ul style=" justify-content: space-between; display: flex;">
        <li style="list-style: none;"><a style="text-decoration: none;" href="./transaksi.php">Transaksi</a></li>
        <li style="list-style: none;"><a style="text-decoration: none;" href="./keranjang.php">Keranjang</a></li>
        <li style="list-style: none;"><a style="text-decoration: none;" href="./laporan_harian.php">Laporan Harian</a></li>
        <li style="list-style: none;"><a style="text-decoration: none;" href="./laporan_bulanan.php">Laporan Bulanan</a></li>
        <li style="list-style: none;"><a style="text-decoration: none;" href="./profil.php">Profil</a></li>
        <li style="list-style: none;"><a style="text-decoration: none;" href="./logout.php">Logout</a></li>
    </ul>
    <h1>Alpha Store</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = mysqli_fetch_assoc($query)) { ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['stok'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    
</body>

</html>