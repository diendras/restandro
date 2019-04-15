<?php
include "db.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

if (isset($_GET['delete'])) {

    require_once("db.php");
    $id_produk = $_GET['id_produk'];
    $q = mysqli_query($con, "delete from `tb_product` where `id_produk`='$id_produk'");
    if ($q)
        echo "success";
    else
        echo "error";
}
