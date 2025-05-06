<?php

include '../config/conn.php';

if (isset($_POST['input'])) {
    $kode = $_POST['kode'];

    $keranjang_tampilan = "SELECT * FROM produk WHERE id_produk = '$kode'";
    $list_kirim = mysqli_query($conn, $keranjang_tampilan);
    $list_terima = mysqli_fetch_assoc($list_kirim);

    $kirim ="INSERT INTO penjualan (id_penjualan, total_penjualan) VALUES ('$kode','$list_terima')";
    mysqli_query($conn,$kirim);
    header("Location:keranjang.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../src/CSS/style.css">
</head>

<body>
<div class="container">
    
</div>
    <form action="" method="post">
        <h2>Transaksi</h2>
        <div>
            <input type="text" name="kode" placeholder="kode PLU" required>
        </div>
        <button class="button" type="submit" name="input">input</button>
    </form>
    <div class="nav-links">
        <a href="./keranjang.php">Keranjang</a>
    </div>
</body>

</html>