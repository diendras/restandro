<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

include "db.php";

if (isset($_POST['submit'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $keterangan = $_POST['keterangan'];

    require_once("db.php");

    $q = mysqli_query($con, "INSERT INTO `tb_product` (`id_produk`,`nama_produk`,`jenis`,`harga`,`stock`,`keterangan`) VALUES ('$id_produk','$nama_produk','$jenis','$harga','$stock','$keterangan')");
    if ($q)
        echo "success";
    else
        echo "error";
}
