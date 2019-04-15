<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

include "db.php";
if (isset($_POST['update'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $keterangan = $_POST['keterangan'];

    require_once("db.php");
    $q = mysqli_query($con, "UPDATE `tb_product` SET `nama_produk`='$nama_produk',`jenis`='$jenis',`harga`='$harga',`stock`='$stock',`keterangan`='$keterangan' where `id_produk`='$id_produk'");
    if ($q)
        echo "success";
    else
        echo "error";
}
