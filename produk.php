<?php
class Produk
{

    private $conn;

    public $id_produk;
    public $nama_produk;
    public $jenis;
    public $harga;
    public $stock;
    public $keterangan;

    public function __construct($db)
    {
        $this->conn = $db;
    }


    function readID()
    {

        // query to read single record
        $query = "SELECT * FROM tb_product    WHERE id_produk = ? LIMIT 0,1";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id_produk of product to be updated
        $stmt->bindParam(1, $this->id_produk);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties

        $this->id_produk = $row['id_produk'];
        $this->nama_produk = $row['nama_produk'];
        $this->harga = $row['harga'];
        $this->jenis = $row['jenis'];
        $this->stock = $row['stock'];
        $this->keterangan = $row['keterangan'];
    }
}
