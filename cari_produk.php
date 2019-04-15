<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once 'database.php';
include_once 'produk.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare produk object
$produk = new Produk($db);

// set id_produk property of record to read
$produk->id_produk = isset($_GET['id_produk']) ? $_GET['id_produk'] : die();
// read the details of produk to be edited
$produk->readID();

if ($produk->nama_produk != null) {
    // create array
    $produk_arr = array(
        "id_produk" =>  $produk->id_produk,
        "nama_produk" => $produk->nama_produk,
        "jenis" => $produk->jenis,
        "harga" => $produk->harga,
        "stock" => $produk->stock,
        "keterangan" => $produk->keterangan

    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($produk_arr);
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user produk does not exist
    echo json_encode(array("message" => "id_produk Produk Tak Ditemukan"));
}
