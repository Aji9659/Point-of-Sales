<?php
include './conn.php';
$query = mysqli_query($conn, "SELECT * FROM penjualan");
$result = mysqli_fetch_assoc($query);

$query_user = mysqli_query($conn, "SELECT * FROM akun");
$result_user = mysqli_fetch_assoc($query_user);

$list_total = "SELECT SUM(total_penjualan) AS total FROM penjualan";
$kirim_total = mysqli_query($conn, $list_total);
$result_total = mysqli_fetch_assoc($kirim_total);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
    <style>
        .struk {
            margin-left: auto;
            margin-right: auto;
            width: 500px;
        }

        .headline {
            text-align: center;
        }

        .data h4 {
            margin-left: 20px;
        }

        li {
            list-decoration: none;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="struk">
        <div class="headline">
            <h1>Alpha Store</h1>
            <h5>089080908324</h5>
        </div>
        <div class="data">
            <h4>Tanggal : <?= $result['tanggal_penjualan'] ?></h4>
            <h4>Transaksi : 9832473927943</h4>
            <h4>Operator : <?= $result_user['nama_kasir'] ?></h4>
        </div>
        <p>======================================================</p>
        <div class="isi">
            <ul>
                <?php while ($row = mysqli_fetch_assoc($query)) {
                    $query_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk ='$row[id_penjualan]'");
                    $result_produk = mysqli_fetch_assoc($query_produk);
                    ?>
                    <li class="list">
                        <p><?= $result_produk['nama_produk'] ?>     <?= $row['total_penjualan'] ?></p>
                    </li>
                <?php } ?>
            </ul>
            <h1>Total: <?= $result_total['total'] ?></h1>
        </div>
    </div>
</body>

</html>